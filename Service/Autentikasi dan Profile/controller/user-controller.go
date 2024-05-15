package controller

import (
	"fmt"
	"net/http"
	"strconv"

	"github.com/JuanS08/golang_gin_gorm_JWT/dto"
	"github.com/JuanS08/golang_gin_gorm_JWT/helper"
	"github.com/JuanS08/golang_gin_gorm_JWT/service"
	"github.com/dgrijalva/jwt-go"
	"github.com/gin-gonic/gin"
)

type UserController interface {
	Update(context *gin.Context)
	Profile(context *gin.Context)
}

type userController struct {
	userService service.UserService
	jwtService  service.JWTService
}

// NewUserController is creating new instance of UserController
func NewUserController(userService service.UserService, jwtService service.JWTService) UserController {
	return &userController{
		userService: userService,
		jwtService:  jwtService,
	}
}

func (c *userController) Update(context *gin.Context) {
	var userUpdateDTO dto.UserUpdateDTO
	if errDTO := context.ShouldBind(&userUpdateDTO); errDTO != nil {
		res := helper.BuildErrorResponse("Failed to process request", errDTO.Error(), helper.EmptyObj{})
		context.AbortWithStatusJSON(http.StatusBadRequest, res)
		return
	}

	authHeader := context.GetHeader("Authorization")
	token, errToken := c.jwtService.ValidateToken(authHeader)
	if errToken != nil {
		context.AbortWithStatusJSON(http.StatusUnauthorized, helper.BuildErrorResponse("Unauthorized", errToken.Error(), helper.EmptyObj{}))
		return
	}

	claims, ok := token.Claims.(jwt.MapClaims)
	if !ok {
		context.AbortWithStatusJSON(http.StatusUnauthorized, helper.BuildErrorResponse("Unauthorized", "Invalid JWT claims", helper.EmptyObj{}))
		return
	}

	id, err := strconv.ParseUint(fmt.Sprintf("%v", claims["user_id"]), 10, 64)
	if err != nil {
		context.AbortWithStatusJSON(http.StatusInternalServerError, helper.BuildErrorResponse("Internal Server Error", err.Error(), helper.EmptyObj{}))
		return
	}

	userUpdateDTO.ID = id
	u := c.userService.Update(userUpdateDTO)
	res := helper.BuildResponse(true, "OK!", u)
	context.JSON(http.StatusOK, res)
}

func (c *userController) Profile(context *gin.Context) {
	authHeader := context.GetHeader("Authorization")
	token, errToken := c.jwtService.ValidateToken(authHeader)
	if errToken != nil {
		context.JSON(http.StatusUnauthorized, gin.H{"error": "Unauthorized"})
		return
	}

	claims, ok := token.Claims.(jwt.MapClaims)
	if !ok {
		context.JSON(http.StatusUnauthorized, gin.H{"error": "Invalid JWT claims"})
		return
	}

	id := fmt.Sprintf("%v", claims["user_id"])
	user := c.userService.Profile(id)
	res := helper.BuildResponse(true, "OK!", user)
	context.JSON(http.StatusOK, res)
}


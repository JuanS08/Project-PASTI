package middleware

import (
	"log"
	"net/http"

	"github.com/JuanS08/golang_gin_gorm_JWT/helper"
	"github.com/JuanS08/golang_gin_gorm_JWT/service"
	"github.com/dgrijalva/jwt-go"
	"github.com/gin-gonic/gin"
)

// AuthorizeJWT validates the token user given, return 401 if not valid
func AuthorizeJWT(jwtService service.JWTService) gin.HandlerFunc {
	return func(c *gin.Context) {
		authHeader := c.GetHeader("Authorization")
		if authHeader == "" {
			response := helper.BuildErrorResponse("Failed to process request", "no token found", nil)
			c.AbortWithStatusJSON(http.StatusBadRequest, response)
			return
		}
		token, err := jwtService.ValidateToken(authHeader)
		if err != nil {
			log.Println(err)
			response := helper.BuildErrorResponse("Token is not valid", err.Error(), nil)
			c.AbortWithStatusJSON(http.StatusUnauthorized, response)
			return
		}
		if claims, ok := token.Claims.(jwt.MapClaims); ok && token.Valid {
			log.Println("claim[user_id] : ", claims["user_id"])
			log.Println("Claim[issuer] :", claims["issuer"])
			c.Next() // Lanjutkan ke handler berikutnya
		} else {
			log.Println("Invalid token claims")
			response := helper.BuildErrorResponse("Token is not valid", "Invalid token claims", nil)
			c.AbortWithStatusJSON(http.StatusUnauthorized, response)
			return
		}
	}
}

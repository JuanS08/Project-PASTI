package main

import (
	"net/http"

	"github.com/JuanS08/golang_gin_gorm_JWT/config"
	"github.com/JuanS08/golang_gin_gorm_JWT/controller"
	"github.com/JuanS08/golang_gin_gorm_JWT/middleware"
	"github.com/JuanS08/golang_gin_gorm_JWT/repository"
	"github.com/JuanS08/golang_gin_gorm_JWT/service"
	"github.com/gin-gonic/gin"
	"gorm.io/gorm"
)

var (
	db               *gorm.DB                    = config.SetupDatabaseConnection()
	userRepository   repository.UserRepository   = repository.NewUserRepository(db)
	jwtService       service.JWTService          = service.NewJWTService()
	userService      service.UserService         = service.NewUserService(userRepository)
	authService      service.AuthService         = service.NewAuthService(userRepository)
	authController   controller.AuthController   = controller.NewAuthController(authService, jwtService)
	userController   controller.UserController   = controller.NewUserController(userService, jwtService)
)

func main() {
	defer config.CloseDatabaseConnection(db)
	r := gin.Default()

	// Endpoint untuk memeriksa status server
	r.GET("/health", func(c *gin.Context) {
		c.JSON(http.StatusOK, gin.H{
			"status": "OK",
		})
	})

	authRoutes := r.Group("api/auth")
	{
		authRoutes.POST("/login", authController.Login)
		authRoutes.POST("/register", authController.Register)
	}

	userRoutes := r.Group("api/user", middleware.AuthorizeJWT(jwtService))
	{
		userRoutes.GET("/profile", userController.Profile)
		userRoutes.PUT("/profile", userController.Update)
	}

	r.Run(":9090")
}

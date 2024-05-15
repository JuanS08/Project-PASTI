package routes

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Ulasan/pkg/controllers"
)

func SetupRouter() *gin.Engine {
    r := gin.Default()

    r.POST("/ulasan", controllers.CreateUlasan)
    r.GET("/ulasan/:id", controllers.GetUlasanByID)
    r.GET("/ulasan", controllers.GetAllUlasan)

    return r
}

package routes

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Pelanggan/pkg/controllers"
)

func SetupRoutes() {
    r := gin.Default()

    r.POST("/tickets", controllers.CreatePelanggan)
    r.GET("/tickets/:id", controllers.GetPelangganByID)
    r.GET("/tickets", controllers.GetAllPelanggan)

    r.Run()
}

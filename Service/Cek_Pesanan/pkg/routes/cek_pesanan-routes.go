package routes

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Cek_Pesanan/pkg/controllers"
)

func SetupRoutes(router *gin.Engine) {
    router.GET("/cekPesanan", controllers.GetAllCekPesanan)
    router.GET("/cekPesanan/:id", controllers.GetCekPesananByID)
}

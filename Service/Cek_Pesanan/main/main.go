package main

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Cek_Pesanan/pkg/config"
    "github.com/JuanS08/Cek_Pesanan/pkg/routes"
)

func main() {
    // Setup database connection
    config.SetupDatabase()

    // Setup Gin router
    r := gin.Default()
    routes.SetupRoutes(r)
    r.Run(":8020")
}

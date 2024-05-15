package routes

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Notifikasi/pkg/controllers"
)

func SetupRouter() *gin.Engine {
    r := gin.Default()

    r.GET("/notifications", controllers.IndexNotifications)
    r.POST("/notify-users", controllers.NotifyUsers)

    return r
}

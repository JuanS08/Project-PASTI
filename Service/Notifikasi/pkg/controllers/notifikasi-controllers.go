package controllers

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Notifikasi/pkg/models"
)

func IndexNotifications(c *gin.Context) {
    notifications := models.GetAllNotifications()
    c.JSON(200, notifications)
}

func NotifyUsers(c *gin.Context) {
    tickets := models.GetCompletedTickets()

    for _, ticket := range tickets {
        user := ticket.User
        message := "Pelanggan " + user.Name + " telah memesan tiket pada tanggal " + ticket.TanggalPemesanan.Format("2006-01-02") + "."
        models.CreateNotification(user.ID, message)
    }

    c.JSON(200, gin.H{"message": "Notifications sent successfully"})
}

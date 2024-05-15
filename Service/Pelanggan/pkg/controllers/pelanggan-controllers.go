package controllers

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Pelanggan/pkg/models"
    "github.com/jinzhu/gorm"
    "strconv"
)

// definisikan variabel db
var db *gorm.DB

func CreatePelanggan(c *gin.Context) {
    var pelanggan models.Ticket
    if err := c.ShouldBindJSON(&pelanggan); err != nil {
        c.JSON(400, gin.H{"error": err.Error()})
        return
    }

    // Simpan data pelanggan ke database
    if err := db.Create(&pelanggan).Error; err != nil {
        c.JSON(500, gin.H{"error": "Gagal menyimpan pelanggan"})
        return
    }

    c.JSON(201, pelanggan)
}

func GetPelangganByID(c *gin.Context) {
    idStr := c.Param("id")
    id, err := strconv.Atoi(idStr)
    if err != nil {
        c.JSON(400, gin.H{"error": "ID tidak valid"})
        return
    }

    var pelanggan models.Ticket
    if err := db.First(&pelanggan, id).Error; err != nil {
        c.JSON(404, gin.H{"error": "Pelanggan tidak ditemukan"})
        return
    }

    c.JSON(200, pelanggan)
}

func GetAllPelanggan(c *gin.Context) {
    var pelanggan []models.Ticket
    if err := db.Find(&pelanggan).Error; err != nil {
        c.JSON(500, gin.H{"error": "Gagal mengambil data pelanggan"})
        return
    }

    c.JSON(200, pelanggan)
}

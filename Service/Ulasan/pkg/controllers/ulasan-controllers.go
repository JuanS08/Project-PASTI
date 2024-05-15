package controllers

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Ulasan/pkg/models"
	"github.com/jinzhu/gorm"
    "strconv"
)

// Deklarasi variabel db
var db *gorm.DB

func CreateUlasan(c *gin.Context) {
    var ulasan models.Ulasan
    if err := c.ShouldBindJSON(&ulasan); err != nil {
        c.JSON(400, gin.H{"error": err.Error()})
        return
    }

    // Simpan data ulasan ke database
    // Contoh: menggunakan GORM
    if err := db.Create(&ulasan).Error; err != nil {
        c.JSON(500, gin.H{"error": "Gagal menyimpan ulasan"})
        return
    }

    c.JSON(201, ulasan)
}

func GetUlasanByID(c *gin.Context) {
    idStr := c.Param("id")
    id, err := strconv.Atoi(idStr)
    if err != nil {
        c.JSON(400, gin.H{"error": "ID tidak valid"})
        return
    }

    var ulasan models.Ulasan
    if err := db.First(&ulasan, id).Error; err != nil {
        c.JSON(404, gin.H{"error": "Ulasan tidak ditemukan"})
        return
    }

    c.JSON(200, ulasan)
}

func GetAllUlasan(c *gin.Context) {
    var ulasan []models.Ulasan
    if err := db.Find(&ulasan).Error; err != nil {
        c.JSON(500, gin.H{"error": "Gagal mengambil data ulasan"})
        return
    }

    c.JSON(200, ulasan)
}

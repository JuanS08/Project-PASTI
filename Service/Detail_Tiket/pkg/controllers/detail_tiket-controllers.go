package controllers

import (
    "net/http"
    "github.com/JuanS08/Detail_Tiket/pkg/models"
    "github.com/gin-gonic/gin"
    "gorm.io/gorm"
)

type DetailTiketController struct {
    DB *gorm.DB
}

func (controller *DetailTiketController) GetAllDetailTikets(c *gin.Context) {
    var detailTikets []models.DetailTiket
    controller.DB.Find(&detailTikets)
    c.JSON(http.StatusOK, detailTikets)
}

func (controller *DetailTiketController) GetDetailTiketById(c *gin.Context) {
    var detailTiket models.DetailTiket
    id := c.Param("id")
    if err := controller.DB.First(&detailTiket, id).Error; err != nil {
        c.JSON(http.StatusNotFound, gin.H{"error": "Detail Tiket not found"})
        return
    }
    c.JSON(http.StatusOK, detailTiket)
}

func (controller *DetailTiketController) CreateDetailTiket(c *gin.Context) {
    var detailTiket models.DetailTiket
    if err := c.ShouldBindJSON(&detailTiket); err != nil {
        c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
        return
    }
    controller.DB.Create(&detailTiket)
    c.JSON(http.StatusCreated, detailTiket)
}

func (controller *DetailTiketController) UpdateDetailTiket(c *gin.Context) {
    var detailTiket models.DetailTiket
    id := c.Param("id")
    if err := controller.DB.First(&detailTiket, id).Error; err != nil {
        c.JSON(http.StatusNotFound, gin.H{"error": "Detail Tiket not found"})
        return
    }
    if err := c.ShouldBindJSON(&detailTiket); err != nil {
        c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
        return
    }
    controller.DB.Save(&detailTiket)
    c.JSON(http.StatusOK, detailTiket)
}

func (controller *DetailTiketController) DeleteDetailTiket(c *gin.Context) {
    var detailTiket models.DetailTiket
    id := c.Param("id")
    if err := controller.DB.First(&detailTiket, id).Error; err != nil {
        c.JSON(http.StatusNotFound, gin.H{"error": "Detail Tiket not found"})
        return
    }
    controller.DB.Delete(&detailTiket)
    c.JSON(http.StatusNoContent, nil)
}

package controllers

import (
    "github.com/gin-gonic/gin"
    "github.com/JuanS08/Cek_Pesanan/pkg/models"
    "net/http"
)

func GetAllCekPesanan(c *gin.Context) {
    cekPesanan := models.GetAllCekPesanan()
    c.JSON(http.StatusOK, cekPesanan)
}

func GetCekPesananByID(c *gin.Context) {
    id := c.Param("id")
    cekPesanan := models.GetCekPesananByID(id)
    c.JSON(http.StatusOK, cekPesanan)
}

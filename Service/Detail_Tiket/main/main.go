package main

import (
	"github.com/JuanS08/Detail_Tiket/pkg/controllers"
	"github.com/JuanS08/Detail_Tiket/pkg/models"
	"github.com/gin-gonic/gin"
	"gorm.io/driver/mysql"
	"gorm.io/gorm"
)

func main() {
	dsn := "root:root@tcp(127.0.0.1:3306)/service_detail_tiket?charset=utf8mb4&parseTime=True&loc=Local"
	db, err := gorm.Open(mysql.Open(dsn), &gorm.Config{})
	if err != nil {
		panic("failed to connect database")
	}

	db.AutoMigrate(&models.DetailTiket{}) 

	router := gin.Default()
	detailTiketController := &controllers.DetailTiketController{DB: db}

	router.GET("/detail_tikets", detailTiketController.GetAllDetailTikets)
	router.GET("/detail_tikets/:id", detailTiketController.GetDetailTiketById)
	router.POST("/detail_tikets", detailTiketController.CreateDetailTiket)
	router.PUT("/detail_tikets/:id", detailTiketController.UpdateDetailTiket)
	router.DELETE("/detail_tikets/:id", detailTiketController.DeleteDetailTiket)

	router.Run()
}

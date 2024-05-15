package routes

import (
	"github.com/JuanS08/Detail_Tiket/pkg/controllers"
	"github.com/gin-gonic/gin"
	"gorm.io/gorm"
)

func RegisterRoutes(router *gin.Engine, db *gorm.DB) {
	detailTiketController := &controllers.DetailTiketController{DB: db}

	router.GET("/detail_tikets", detailTiketController.GetAllDetailTikets)
	router.GET("/detail_tikets/:id", detailTiketController.GetDetailTiketById)
	router.POST("/detail_tikets", detailTiketController.CreateDetailTiket)
	router.PUT("/detail_tikets/:id", detailTiketController.UpdateDetailTiket)
	router.DELETE("/detail_tikets/:id", detailTiketController.DeleteDetailTiket)
}

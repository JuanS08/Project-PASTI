package controller

import (
	"net/http"

	"github.com/gin-gonic/gin"
)

type HealthController interface {
	CheckHealth(ctx *gin.Context)
}

type healthController struct{}

func NewHealthController() HealthController {
	return &healthController{}
}

func (c *healthController) CheckHealth(ctx *gin.Context) {
	ctx.JSON(http.StatusOK, gin.H{
		"status": "OK",
	})
}

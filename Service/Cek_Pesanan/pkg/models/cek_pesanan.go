package models

import (
	"github.com/jinzhu/gorm"
	"github.com/JuanS08/Cek_Pesanan/pkg/config"
)

type Approval struct {
    gorm.Model
    Name     string `json:"name"`
    Email    string `json:"email"`
    Kelas    string `json:"kelas"`
    Subtotal float64 `json:"subtotal"`
    Status   string  `json:"status"`
}

func GetAllCekPesanan() []Approval {
    var approvals []Approval
    config.GetDB().Find(&approvals)
    return approvals
}

func GetCekPesananByID(id string) Approval {
    var approval Approval
    config.GetDB().First(&approval, id)
    return approval
}

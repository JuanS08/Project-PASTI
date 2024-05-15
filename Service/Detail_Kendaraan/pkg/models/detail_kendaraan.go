package models

import (
	"github.com/jinzhu/gorm"
	_ "github.com/jinzhu/gorm/dialects/mysql"
)

var db *gorm.DB

func init() {
	var err error
	db, err = gorm.Open("mysql", "root:root@tcp(127.0.0.1:3306)/service_detail_kendaraan?charset=utf8&parseTime=True&loc=Local")
	if err != nil {
		panic("failed to connect database")
	}
	db.AutoMigrate(&DetailKendaraan{})
}

type DetailKendaraan struct {
	gorm.Model
	UserID         uint   `gorm:"not null"`
	NomorKendaraan string `gorm:"unique;not null"`
	NomorKursi     string `gorm:"default:null"`
	Status         string `gorm:"not null"`
	TotalKursi     int    `gorm:"not null"`
	Kelas          string `gorm:"not null"`
}

// CreateDetailKendaraan creates a new DetailKendaraan record
func CreateDetailKendaraan(detail DetailKendaraan) DetailKendaraan {
	db.Create(&detail)
	return detail
}

// GetAllDetailKendaraan retrieves all DetailKendaraan records
func GetAllDetailKendaraan() []DetailKendaraan {
	var details []DetailKendaraan
	db.Find(&details)
	return details
}

// GetDetailKendaraanByID retrieves a DetailKendaraan record by ID
func GetDetailKendaraanByID(id uint) (*DetailKendaraan, error) {
	var detail DetailKendaraan
	if err := db.First(&detail, id).Error; err != nil {
		return nil, err
	}
	return &detail, nil
}

// UpdateDetailKendaraan updates an existing DetailKendaraan record
func UpdateDetailKendaraan(detail DetailKendaraan) DetailKendaraan {
	db.Save(&detail)
	return detail
}

// DeleteDetailKendaraan deletes a DetailKendaraan record by ID
func DeleteDetailKendaraan(id uint) error {
	var detail DetailKendaraan
	if err := db.First(&detail, id).Error; err != nil {
		return err
	}
	db.Delete(&detail)
	return nil
}



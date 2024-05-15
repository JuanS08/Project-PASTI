package models

import (
    "github.com/jinzhu/gorm"
)

// Define your Seat model here
type Seat struct {
    gorm.Model
    NomorKendaraan string `gorm:"not null"`
    NomorKursi     string `gorm:"not null"`
    Status         string `gorm:"not null"`
}

// GetSeatByKendaraanAndNomor retrieves a seat by vehicle number and seat number
func GetSeatByKendaraanAndNomor(nomorKendaraan, nomorKursi string) (*Seat, error) {
    var seat Seat
    if err := db.Where("nomor_kendaraan = ? AND nomor_kursi = ?", nomorKendaraan, nomorKursi).First(&seat).Error; err != nil {
        return nil, err
    }
    return &seat, nil
}

// UpdateSeatStatus updates the status of a seat with the given ID
func UpdateSeatStatus(id uint, status string) error {
    var seat Seat
    if err := db.First(&seat, id).Error; err != nil {
        return err
    }

    seat.Status = status
    if err := db.Save(&seat).Error; err != nil {
        return err
    }

    return nil
}


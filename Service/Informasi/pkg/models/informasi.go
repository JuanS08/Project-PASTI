package models

import (
    "github.com/jinzhu/gorm"
)

type Informasi struct {
    gorm.Model
    Judul           string `gorm:"column:judul" json:"judul"`
    Deskripsi       string `gorm:"column:deskripsi" json:"deskripsi"`
    Kategori        string `gorm:"column:kategori" json:"kategori"`
    TanggalPublikasi string `gorm:"column:tanggal_publikasi" json:"tanggal_publikasi"`
    AdminID         uint   `gorm:"column:admin_id" json:"admin_id"`
    Image           string `gorm:"column:image" json:"image"`
}

func (i *Informasi) CreateInformasi(db *gorm.DB) *Informasi {
    db.Create(&i)
    return i
}

func GetAllInformasi(db *gorm.DB) []Informasi {
    var informasi []Informasi
    db.Find(&informasi)
    return informasi
}

func GetInformasibyID(db *gorm.DB, id uint) (*Informasi, *gorm.DB) {
    var getInformasi Informasi
    db = db.Where("id=?", id).Find(&getInformasi)
    return &getInformasi, db
}

func DeleteInformasi(db *gorm.DB, id uint) Informasi {
    var informasi Informasi
    db.Where("id=?", id).Delete(&informasi)
    return informasi
}

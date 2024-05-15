package models

import (
	"github.com/JuanS08/Paket/pkg/config"
	"github.com/jinzhu/gorm"
)

var db *gorm.DB

type Paket struct {
	gorm.Model
	NamaPaket        string `gorm:"column:nama_paket" json:"nama_paket"`
	Berat            int    `gorm:"column:berat" json:"berat"`
	Harga            int    `gorm:"column:harga" json:"harga"`
	Kategori         string `gorm:"column:kategori" json:"kategori"`
	PengirimID       uint   `gorm:"column:pengirim_id" json:"pengirim_id"`
	PenerimaID       uint   `gorm:"column:penerima_id" json:"penerima_id"`
	Deskripsi        string `gorm:"column:deskripsi" json:"deskripsi"`
	WaktuKedatangan  string `gorm:"column:waktu_kedatangan" json:"waktu_kedatangan"`
	WaktuKeberangkatan string `gorm:"column:waktu_keberangkatan" json:"waktu_keberangkatan"`
}

func init() {
	config.Connect()
	db = config.GetDB()
	db.AutoMigrate(&Paket{})
}

func (p *Paket) Create() *Paket {
	db.Create(&p)
	return p
}

func GetAll() []Paket {
	var pakets []Paket
	db.Find(&pakets)
	return pakets
}

func GetByID(id uint) (*Paket, *gorm.DB) {
	var paket Paket
	db := db.Where("id=?", id).Find(&paket)
	return &paket, db
}

func Delete(id uint) Paket {
	var paket Paket
	db.Where("id=?", id).Delete(&paket)
	return paket
}

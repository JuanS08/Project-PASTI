package models

import (
	"github.com/JuanS08/Pelanggan/pkg/config"
	"github.com/jinzhu/gorm"
)

var db *gorm.DB

type Ticket struct {
	gorm.Model
	UserID               uint   `gorm:"column:user_id" json:"user_id"`
	TanggalPemesanan     string `gorm:"column:tanggal_pemesanan" json:"tanggal_pemesanan"`
	TanggalKeberangkatan string `gorm:"column:tanggal_keberangkatan" json:"tanggal_keberangkatan"`
	WaktuKeberangkatan   string `gorm:"column:waktu_keberangkatan" json:"waktu_keberangkatan"`
	AsalKeberangkatan    string `gorm:"column:asal_keberangkatan" json:"asal_keberangkatan"`
	Tujuan               string `gorm:"column:tujuan" json:"tujuan"`
	Kelas                string `gorm:"column:kelas" json:"kelas"`
	StatusPembayaran     string `gorm:"column:status_pembayaran" json:"status_pembayaran"`
	MetodePembayaran     string `gorm:"column:metode_pembayaran" json:"metode_pembayaran"`
	JumlahPenumpang      int    `gorm:"column:jumlah_penumpang" json:"jumlah_penumpang"`
	NomorKursi           string `gorm:"column:nomor_kursi" json:"nomor_kursi"`
	CatatanTambahan      string `gorm:"column:catatan_tambahan" json:"catatan_tambahan"`
	Harga                int    `gorm:"column:harga" json:"harga"`
}

func init() {
	config.Connect()
	db = config.GetDB()
}

func (t *Ticket) CreateTicket() *Ticket {
	db.Create(&t)
	return t
}

func GetAllTickets() []Ticket {
	var tickets []Ticket
	db.Find(&tickets)
	return tickets
}

func GetTicketByID(id int64) (*Ticket, *gorm.DB) {
	var ticket Ticket
	db := db.Where("id=?", id).Find(&ticket)
	return &ticket, db
}

func DeleteTicket(id int64) Ticket {
	var ticket Ticket
	db.Where("id=?", id).Delete(&ticket)
	return ticket
}

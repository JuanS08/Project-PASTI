package models

import (
    "gorm.io/gorm"
)

type DetailTiket struct {
    gorm.Model
    AsalKeberangkatan   string  `json:"asal_keberangkatan"`
    TujuanKeberangkatan string  `json:"tujuan_keberangkatan"`
    Kelas               string  `json:"kelas"`
    Harga               float64 `json:"harga"`
    MetodePembayaran    string  `json:"metode_pembayaran"`
}

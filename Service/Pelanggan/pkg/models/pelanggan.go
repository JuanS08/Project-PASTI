package models

import "time"

type Ticket struct {
    ID                  uint      `json:"id"`
    UserID              uint      `json:"user_id"`
    TanggalPemesanan    time.Time `json:"tanggal_pemesanan"`
    TanggalKeberangkatan time.Time `json:"tanggal_keberangkatan"`
    WaktuKeberangkatan  string    `json:"waktu_keberangkatan"`
    AsalKeberangkatan   string    `json:"asal_keberangkatan"`
    TujuanKeberangkatan string    `json:"tujuan_keberangkatan"`
    Kelas               string    `json:"kelas"`
    Subtotal            float64   `json:"subtotal"`
    StatusPembayaran    string    `json:"status_pembayaran"`
    MetodePembayaran    string    `json:"metode_pembayaran"`
    JumlahPenumpang     int       `json:"jumlah_penumpang"`
    NomorKursi          string    `json:"nomor_kursi"`
    CatatanTambahan     string    `json:"catatan_tambahan"`
    CreatedAt           time.Time `json:"created_at"`
    UpdatedAt           time.Time `json:"updated_at"`
}

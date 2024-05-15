package models

import (
    "gorm.io/gorm"
    "time"
)

type Notification struct {
    UserID    uint      `json:"user_id"`
    Message   string    `json:"message"`
    CreatedAt time.Time `json:"created_at"`
    UpdatedAt time.Time `json:"updated_at"`
}

type Ticket struct {
    ID                  uint      `json:"id"`
    UserID              uint      `json:"user_id"`
    User                User      `json:"user"` // Relasi ke User
    TanggalPemesanan    time.Time `json:"tanggal_pemesanan"`
    TanggalKeberangkatan time.Time `json:"tanggal_keberangkatan"`
    Status              string    `json:"status"`
}

type User struct {
    ID        uint   `json:"id"`
    Name      string `json:"name"`
    Email     string `json:"email"`
    Password  string `json:"password"`
    CreatedAt time.Time
    UpdatedAt time.Time
}

var db *gorm.DB

func SetDB(database *gorm.DB) {
    db = database
}

func GetAllNotifications() []Notification {
    // Implementasi untuk mendapatkan semua notifikasi
    notifications := []Notification{}
    db.Find(&notifications)
    return notifications
}

func CreateNotification(userID uint, message string) {
    // Implementasi untuk membuat notifikasi baru
    notification := Notification{
        UserID:    userID,
        Message:   message,
        CreatedAt: time.Now(),
        UpdatedAt: time.Now(),
    }
    db.Create(&notification)
}

func GetCompletedTickets() []Ticket {
    // Implementasi untuk mendapatkan semua tiket yang selesai
    tickets := []Ticket{}
    db.Where("status = ?", "completed").Find(&tickets)
    return tickets
}

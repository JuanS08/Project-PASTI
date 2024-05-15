package models

import "time"

type Ulasan struct {
    ID        uint      `json:"id"`
    Name      string    `json:"name"`
    IsiUlasan string    `json:"isi_ulasan"`
    Rating    uint8     `json:"rating"`
    CreatedAt time.Time `json:"created_at"`
    UpdatedAt time.Time `json:"updated_at"`
}

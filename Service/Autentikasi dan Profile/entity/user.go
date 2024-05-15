package entity

import (
	"time"

	"gorm.io/gorm"
)

type User struct {
	ID             uint64    `gorm:"primary_key;auto_increment" json:"id"`
	Name           string    `gorm:"type:varchar(255)" json:"name"`
	Email          string    `gorm:"uniqueIndex;type:varchar(255)" json:"email"`
	PhoneNumber    string    `gorm:"type:varchar(15);nullable" json:"phonenumber"`
	Gender         string    `gorm:"type:enum('laki-laki','perempuan')" json:"gender"`
	IdentityNumber string    `gorm:"type:varchar(20)" json:"identitynumber"`
	Birthdate      string    `gorm:"type:date" json:"birthdate"`
	Password       string    `gorm:"->;<-;not null" json:"-"`
	CreatedAt      time.Time `json:"created_at"`
	UpdatedAt      time.Time `json:"updated_at"`
	Token          string    `gorm:"-" json:"token,omitempty"`
}

func (u *User) BeforeCreate(tx *gorm.DB) (err error) {
    var lastUser User
    if err := tx.Order("id desc").First(&lastUser).Error; err != nil {
        if err.Error() == "record not found" {
            u.ID = 1
        } else {
            return err
        }
    } else {
        u.ID = lastUser.ID + 1
    }
    return nil
}
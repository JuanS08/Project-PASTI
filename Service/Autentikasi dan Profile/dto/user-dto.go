package dto

import "time"

// UserUpdateDTO is used by client when PUT update profile
type UserUpdateDTO struct {
    ID             uint64 `json:"id" form:"id"`
    Name           string `json:"name" form:"name" binding:"required"`
    Email          string `json:"email" form:"email" binding:"required,email"`
    PhoneNumber    string `json:"phone_number" form:"phone_number"`
    Gender         string `json:"gender" form:"gender" binding:"required"`
    IdentityNumber string `json:"identity_number" form:"identity_number"`
    Birthdate      string `json:"birthdate" form:"birthdate" binding:"required"`
    Password       string `json:"password,omitempty" form:"password,omitempty" binding:"required"`
    CreatedAt      time.Time `json:"created_at"`
    UpdatedAt      time.Time `json:"updated_at"`
}

//UserCreateDTO is used by client when create user
// type UserCreateDTO struct {
// 	Name     string `json:"name" form:"name" binding:"required"`
// 	Email    string `json:"email" form:"email" binding:"required" validate:"email"`
//  PhoneNumber    string `json:"phone_number" form:"phone_number"`
//  Gender         string `json:"gender" form:"gender" binding:"required"`
//  IdentityNumber string `json:"identity_number" form:"identity_number" binding:"required"`
//  Birthdate      string `json:"birthdate" form:"birthdate" binding:"required"`
// 	Password string `json:"password, omitempty" form:"password, omitempty" validate:"min:6" binding:"required" `
// CreatedAt      time.Time `json:"created_at"`
// UpdatedAt      time.Time `json:"updated_at"`
// }

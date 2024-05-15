package dto

//RegisterDTO used when client post from /register url
type RegisterDTO struct {
	Name           string `json:"name" form:"name" binding:"required"`
	Email          string `json:"email" form:"email" binding:"required,email"`
	PhoneNumber    string `json:"phone_number" form:"phone_number"`
	Gender         string `json:"gender" form:"gender" binding:"required"`
	IdentityNumber string `json:"identity_number" form:"identity_number" binding:"required"`
	Birthdate      string `json:"birthdate" form:"birthdate" binding:"required"`
	Password       string `json:"password" form:"password" binding:"required"`
}

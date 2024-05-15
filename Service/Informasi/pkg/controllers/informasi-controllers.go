package controllers

import (
	"encoding/json"
	"fmt"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/JuanS08/Informasi/pkg/models"
	"github.com/JuanS08/Informasi/pkg/utils"
	"github.com/jinzhu/gorm"
)

var db *gorm.DB

func GetAllInformasi(w http.ResponseWriter, r *http.Request) {
	informasi := models.GetAllInformasi(db)
	res, _ := json.Marshal(informasi)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func GetInformasiByID(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	informasiID := vars["informasiID"]
	id, err := strconv.Atoi(informasiID)
	if err != nil {
		fmt.Println("error while parsing")
	}
	informasi, _ := models.GetInformasibyID(db, uint(id))
	res, _ := json.Marshal(informasi)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func CreateInformasi(w http.ResponseWriter, r *http.Request) {
	newInformasi := &models.Informasi{}
	utils.ParseBody(r, newInformasi)
	b := newInformasi.CreateInformasi(db)
	res, _ := json.Marshal(b)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func DeleteInformasi(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	informasiID := vars["informasiID"]
	id, err := strconv.Atoi(informasiID)
	if err != nil {
		fmt.Println("error while parsing")
	}
	informasi := models.DeleteInformasi(db, uint(id))
	res, _ := json.Marshal(informasi)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

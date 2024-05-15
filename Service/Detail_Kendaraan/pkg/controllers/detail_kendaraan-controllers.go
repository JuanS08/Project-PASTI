package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/JuanS08/Detail_Kendaraan/pkg/models"
	"github.com/JuanS08/Detail_Kendaraan/pkg/utils"
	"github.com/gorilla/mux"
)

func CreateDetailKendaraan(w http.ResponseWriter, r *http.Request) {
	var detail models.DetailKendaraan
	utils.ParseBody(r, &detail)
	createdDetail := models.CreateDetailKendaraan(detail)
	res, _ := json.Marshal(createdDetail)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func GetAllDetailKendaraan(w http.ResponseWriter, r *http.Request) {
	details := models.GetAllDetailKendaraan()
	res, _ := json.Marshal(details)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func GetDetailKendaraanByID(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	id, err := strconv.Atoi(vars["id"])
	if err != nil {
		w.WriteHeader(http.StatusBadRequest)
		return
	}
	detail, err := models.GetDetailKendaraanByID(uint(id))
	if err != nil {
		w.WriteHeader(http.StatusNotFound)
		return
	}
	res, _ := json.Marshal(detail)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func UpdateDetailKendaraan(w http.ResponseWriter, r *http.Request) {
	var detail models.DetailKendaraan
	utils.ParseBody(r, &detail)
	updatedDetail := models.UpdateDetailKendaraan(detail)
	res, _ := json.Marshal(updatedDetail)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func DeleteDetailKendaraan(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	id, err := strconv.Atoi(vars["id"])
	if err != nil {
		w.WriteHeader(http.StatusBadRequest)
		return
	}
	err = models.DeleteDetailKendaraan(uint(id))
	if err != nil {
		w.WriteHeader(http.StatusNotFound)
		return
	}
	w.WriteHeader(http.StatusOK)
	w.Write([]byte(`{"message": "DetailKendaraan deleted successfully"}`))
}

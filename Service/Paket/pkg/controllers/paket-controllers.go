package controllers

import (
    "encoding/json"
    "fmt"
    "net/http"
    "strconv"

    "github.com/JuanS08/Paket/pkg/models"
    "github.com/JuanS08/Paket/pkg/utils"
    "github.com/gorilla/mux"
)

func GetAllPaket(w http.ResponseWriter, r *http.Request) {
    pakets := models.GetAll()
    res, _ := json.Marshal(pakets)
    w.Header().Set("Content-Type", "application/json")
    w.WriteHeader(http.StatusOK)
    w.Write(res)
}

func GetPaketByID(w http.ResponseWriter, r *http.Request) {
    vars := mux.Vars(r)
    paketID := vars["paketID"]
    id, err := strconv.Atoi(paketID)
    if err != nil {
        fmt.Println("error while parsing")
    }
    paket, _ := models.GetByID(uint(id))
    res, _ := json.Marshal(paket)
    w.Header().Set("Content-Type", "application/json")
    w.WriteHeader(http.StatusOK)
    w.Write(res)
}

func CreatePaket(w http.ResponseWriter, r *http.Request) {
    newPaket := &models.Paket{}
    utils.ParseBody(r, newPaket)
    b := newPaket.Create()
    res, _ := json.Marshal(b)
    w.Header().Set("Content-Type", "application/json")
    w.WriteHeader(http.StatusOK)
    w.Write(res)
}

func DeletePaket(w http.ResponseWriter, r *http.Request) {
    vars := mux.Vars(r)
    paketID := vars["paketID"]
    id, err := strconv.Atoi(paketID)
    if err != nil {
        fmt.Println("error while parsing")
    }
    paket := models.Delete(uint(id))
    res, _ := json.Marshal(paket)
    w.Header().Set("Content-Type", "application/json")
    w.WriteHeader(http.StatusOK)
    w.Write(res)
}

func UpdatePaket(w http.ResponseWriter, r *http.Request) {
    var updatePaket = &models.Paket{}
    utils.ParseBody(r, updatePaket)
    vars := mux.Vars(r)
    paketID := vars["paketID"]
    id, err := strconv.Atoi(paketID)
    if err != nil {
        fmt.Println("error while parsing")
    }
    paket, db := models.GetByID(uint(id))
    if updatePaket.NamaPaket != "" {
        paket.NamaPaket = updatePaket.NamaPaket
    }
    if updatePaket.Deskripsi != "" {
        paket.Deskripsi = updatePaket.Deskripsi
    }
    if updatePaket.Kategori != "" {
        paket.Kategori = updatePaket.Kategori
    }
    if updatePaket.Berat != 0 {
        paket.Berat = updatePaket.Berat
    }
    if updatePaket.Harga != 0 {
        paket.Harga = updatePaket.Harga
    }
    if updatePaket.WaktuKedatangan != "" {
        paket.WaktuKedatangan = updatePaket.WaktuKedatangan
    }
    if updatePaket.WaktuKeberangkatan != "" {
        paket.WaktuKeberangkatan = updatePaket.WaktuKeberangkatan
    }
    if updatePaket.PengirimID != 0 {
        paket.PengirimID = updatePaket.PengirimID
    }
    if updatePaket.PenerimaID != 0 {
        paket.PenerimaID = updatePaket.PenerimaID
    }
    db.Save(&paket)
    res, _ := json.Marshal(paket)
    w.Header().Set("Content-Type", "application/json")
    w.WriteHeader(http.StatusOK)
    w.Write(res)
}

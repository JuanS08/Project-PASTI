package controllers

import (
	"encoding/json"
	"fmt"
	"net/http"
	"strconv"

	"github.com/JuanS08/Pelanggan/pkg/models"
	"github.com/JuanS08/Pelanggan/pkg/utils"
	"github.com/gorilla/mux"
)

func GetTicket(w http.ResponseWriter, r *http.Request) {
	newTickets := models.GetAllTickets()
	res, _ := json.Marshal(newTickets)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func GetTicketById(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	ticketId := vars["ticketId"]
	ID, err := strconv.ParseInt(ticketId, 0, 0)
	if err != nil {
		fmt.Println("error while parsing")
	}
	ticketDetails, _ := models.GetTicketByID(ID)
	res, _ := json.Marshal(ticketDetails)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func CreateTicket(w http.ResponseWriter, r *http.Request) {
	createTicket := &models.Ticket{}
	utils.ParseBody(r, createTicket)
	b := createTicket.CreateTicket()
	res, _ := json.Marshal(b)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func DeleteTicket(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	ticketId := vars["ticketId"]
	ID, err := strconv.ParseInt(ticketId, 0, 0)
	if err != nil {
		fmt.Println("error while parsing")
	}
	ticket := models.DeleteTicket(ID)
	res, _ := json.Marshal(ticket)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

func UpdateTicket(w http.ResponseWriter, r *http.Request) {
	var updateTicket = &models.Ticket{}
	utils.ParseBody(r, updateTicket)
	vars := mux.Vars(r)
	ticketId := vars["ticketId"]
	ID, err := strconv.ParseInt(ticketId, 0, 0)
	if err != nil {
		fmt.Println("error while parsing")
	}
	ticketDetails, db := models.GetTicketByID(ID)
	if updateTicket.AsalKeberangkatan != "" {
		ticketDetails.AsalKeberangkatan = updateTicket.AsalKeberangkatan
	}
	if updateTicket.Tujuan != "" {
		ticketDetails.Tujuan = updateTicket.Tujuan
	}
	if updateTicket.Kelas != "" {
		ticketDetails.Kelas = updateTicket.Kelas
	}
	if updateTicket.Harga != 0 {
		ticketDetails.Harga = updateTicket.Harga
	}	
	if updateTicket.MetodePembayaran != "" {
		ticketDetails.MetodePembayaran = updateTicket.MetodePembayaran
	}
	db.Save(&ticketDetails)
	res, _ := json.Marshal(ticketDetails)
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write(res)
}

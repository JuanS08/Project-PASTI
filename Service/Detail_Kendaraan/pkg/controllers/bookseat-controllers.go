package controllers

import (
	"net/http"

	"github.com/JuanS08/Detail_Kendaraan/pkg/models"
)

func BookSeat(w http.ResponseWriter, r *http.Request) {
	var seatRequest models.Seat
    // Mendapatkan kursi berdasarkan nomor kendaraan dan nomor kursi
    seat, err := models.GetSeatByKendaraanAndNomor(seatRequest.NomorKendaraan, seatRequest.NomorKursi)
    if err != nil {
        w.WriteHeader(http.StatusNotFound)
        w.Write([]byte(`{"message": "Seat not found"}`))
        return
    }

    // Mengupdate status kursi
    seat.Status = "dipesan"
    if err := models.UpdateSeatStatus(seat.ID, "dipesan"); err != nil {
        w.WriteHeader(http.StatusInternalServerError)
        w.Write([]byte(`{"message": "Failed to update seat status"}`))
        return
    }

    w.WriteHeader(http.StatusOK)
    w.Write([]byte(`{"message": "Seat booked successfully"}`))
}

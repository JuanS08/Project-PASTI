package routes

import (
    "github.com/gorilla/mux"
    "github.com/JuanS08/Detail_Kendaraan/pkg/controllers"
)

func RegisterKendaraanRoutes(router *mux.Router) {
    router.HandleFunc("/kendaraan", controllers.GetAllDetailKendaraan).Methods("GET")
    router.HandleFunc("/kendaraan", controllers.CreateDetailKendaraan).Methods("POST")
    router.HandleFunc("/kendaraan/{id}", controllers.GetDetailKendaraanByID).Methods("GET")
    router.HandleFunc("/kendaraan/{id}", controllers.UpdateDetailKendaraan).Methods("PUT")
    router.HandleFunc("/kendaraan/{id}", controllers.DeleteDetailKendaraan).Methods("DELETE")
    router.HandleFunc("/kendaraan/bookseat", controllers.BookSeat).Methods("POST")
}

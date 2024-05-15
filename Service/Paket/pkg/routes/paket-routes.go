package routes

import (
	"github.com/gorilla/mux"
	"github.com/JuanS08/Paket/pkg/controllers"
)

var RegisterPaketRoutes = func(router *mux.Router) {
	router.HandleFunc("/paket", controllers.CreatePaket).Methods("POST")
	router.HandleFunc("/paket", controllers.GetAllPaket).Methods("GET")
	router.HandleFunc("/paket/{id}", controllers.GetPaketByID).Methods("GET")
	router.HandleFunc("/paket/{id}", controllers.UpdatePaket).Methods("PUT")
	router.HandleFunc("/paket/{id}", controllers.DeletePaket).Methods("DELETE")
}

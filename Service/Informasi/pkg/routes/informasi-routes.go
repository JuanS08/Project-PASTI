package routes

import (
	"github.com/JuanS08/Informasi/pkg/controllers"
	"github.com/gorilla/mux"
)

var RegisterInformasiRoutes = func(router *mux.Router) {
	router.HandleFunc("/informasi",
		controllers.CreateInformasi).Methods("POST")
	router.HandleFunc("/informasi",
		controllers.GetAllInformasi).Methods("GET")
	router.HandleFunc("/informasi/{informasiID}",
		controllers.GetInformasiByID).Methods("GET")
	router.HandleFunc("/informasi/{informasiID}",
		controllers.DeleteInformasi).Methods("DELETE")
}

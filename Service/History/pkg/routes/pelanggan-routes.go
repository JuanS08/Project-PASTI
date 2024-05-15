package routes

import (
    "github.com/JuanS08/Pelanggan/pkg/controllers"
    "github.com/gorilla/mux"
)

var RegisterStudentsRoutes = func(router *mux.Router) {
    router.HandleFunc("/ticket/",
        controllers.CreateTicket).Methods("POST")
    router.HandleFunc("/ticket/", controllers.GetTicket).Methods("GET")
    router.HandleFunc("/ticket/{ticketId}",
        controllers.GetTicketById).Methods("GET")
    router.HandleFunc("/ticket/{ticketId}",
        controllers.UpdateTicket).Methods("PUT")
    router.HandleFunc("/ticket/{ticketId}",
        controllers.DeleteTicket).Methods("DELETE")
}

package main

import (
	"log"
	"net/http"

	"github.com/JuanS08/Detail_Kendaraan/pkg/routes"
	"github.com/gorilla/mux"
)

func main() {
	r := mux.NewRouter()

	// Register routes
	routes.RegisterKendaraanRoutes(r)

	// Start the server
	log.Fatal(http.ListenAndServe(":8030", r))
}

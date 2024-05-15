package main

import (
	"fmt"
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/JuanS08/Paket/pkg/config"
	"github.com/JuanS08/Paket/pkg/routes"
)

func main() {
	config.Connect()
	defer config.GetDB().Close()

	router := mux.NewRouter()
	routes.RegisterPaketRoutes(router)

	fmt.Println("Starting Server localhost:8060")
	log.Fatal(http.ListenAndServe("localhost:400", router))
}

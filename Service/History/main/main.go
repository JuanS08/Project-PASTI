package main

import (
	"fmt"
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/JuanS08/Pelanggan/pkg/config"
	"github.com/JuanS08/Pelanggan/pkg/routes"
	_ "github.com/jinzhu/gorm/dialects/mysql"
)

func main() {
	config.Connect()
	defer config.GetDB().Close()

	router := mux.NewRouter()
	routes.RegisterStudentsRoutes(router)

	http.Handle("/", router)
	fmt.Println("Starting Server localhost:8000")
	log.Fatal(http.ListenAndServe("localhost:500", router))
}

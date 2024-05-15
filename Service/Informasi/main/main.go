package main

import (
	"fmt"
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/JuanS08/Informasi/pkg/models"
	"github.com/JuanS08/Informasi/pkg/routes"
	"github.com/jinzhu/gorm"
	_ "github.com/jinzhu/gorm/dialects/mysql"
)

func main() {
	db, err := gorm.Open("mysql", "root:root@tcp(127.0.0.1:3306)/service_informasi?charset=utf8&parseTime=True&loc=Local")
	if err != nil {
		log.Fatal("Failed to connect to database: ", err)
	}
	defer db.Close()

	db.AutoMigrate(&models.Informasi{})

	router := mux.NewRouter()
	routes.RegisterInformasiRoutes(router)

	fmt.Println("Starting Server localhost:8040")
	log.Fatal(http.ListenAndServe("localhost:400", router))
}

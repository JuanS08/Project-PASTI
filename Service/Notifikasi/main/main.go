package main

import (
    "github.com/JuanS08/Notifikasi/pkg/routes"
)

func main() {
    r := routes.SetupRouter()
    r.Run(":8080")
}

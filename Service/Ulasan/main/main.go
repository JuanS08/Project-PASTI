package main

import (
    "github.com/JuanS08/Ulasan/pkg/routes"
)

func main() {
    r := routes.SetupRouter()
    r.Run(":8070")
}

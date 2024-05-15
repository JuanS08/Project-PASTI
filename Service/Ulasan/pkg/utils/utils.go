package utils

import (
    "fmt"
    "time"
)

func Log(message string) {
    currentTime := time.Now().Format("2006-01-02 15:04:05")
    fmt.Printf("[%s] %s\n", currentTime, message)
}

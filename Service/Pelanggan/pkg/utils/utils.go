package utils

import (
	"time"

    "crypto/rand"
    "encoding/hex"
    "fmt"
)

// GenerateUniqueID menghasilkan ID unik untuk pelanggan
func GenerateUniqueID() string {
    // Membuat byte array dengan panjang 16
    b := make([]byte, 16)
    // Mengisi byte array dengan nilai acak
    _, err := rand.Read(b)
    if err != nil {
        // Jika terjadi error, gunakan timestamp sebagai fallback
        return fmt.Sprintf("%d", time.Now().Unix())
    }
    // Mengkonversi byte array menjadi string hex
    return hex.EncodeToString(b)
}

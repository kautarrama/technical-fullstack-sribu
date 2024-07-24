# Penanganan Data Duplikat pada Array Asosiatif Multidimensional

Sebelumnya, saya menggunakan fungsi bawaan PHP yaitu `array_unique` untuk menghapus nilai yang duplikat dari array. Namun, setelah merujuk ke dokumentasi PHP, saya menemukan bahwa `array_unique` tidak dapat mengatasi bentuk data multidimensional array asosiatif.

Setelah melakukan research, saya menemukan bahwa algoritma yang lebih tepat untuk menangani data dalam kasus ini adalah menggunakan perulangan `foreach`. Saya menyimpan nilai dari array buah ke array baru berdasarkan kunci (key) yang merupakan nama buah yang sudah diformat.

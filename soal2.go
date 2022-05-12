package main

import "fmt"

func main() {
	a := [3][4]int{
		{11, 2, 4},
		{4, 5, 6, 7},
		{10, 8, 12},
	}
	t := 0
	r := 0

	fmt.Println("Array 2 Dimensi")

	for i := 0; i < 3; i++ {
		for j := 0; j < 3; j++ {
			fmt.Println(a[i][j])
		}

		fmt.Println("      ")
	}

	for i := 0; i < 3; i++ {
		for j := 0; j < 3; j++ {
			if i == j {
				t += a[i][j]
			}
		}
	}
	fmt.Println("Diagonal Kanan", t)

	for i := 0; i < 3; i++ {
		for j := 0; j < 3; j++ {
			if i == j {
				r += a[i][j]
			}
		}
	}
	fmt.Println("Diagonal Kiri", r)

	hasil := t + r
	fmt.Println("Hasil Jumlah Diagonal", hasil)
}

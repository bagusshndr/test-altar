package main

import "fmt"

func reverse(s string) string {
	rns := []rune(s)
	for i, j := 0, len(rns)-1; i < j; i, j = i+1, j-1 {

		rns[i], rns[j] = rns[j], rns[i]
	}

	return string(rns)
}

func main() {
	kata := "katak"
	kataRev := reverse(kata)

	if kataRev == kata {
		fmt.Println("True")
	} else {
		fmt.Println("false")
	}

	// fmt.Println(kata)
	// fmt.Println(kataRev)
}

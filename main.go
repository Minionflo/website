package main

import (
	"log"
	"net/http"
	"text/template"
	"time"
)

type PageVariables struct {
	Date string
	Time string
}

func handler(w http.ResponseWriter, r *http.Request) {

	w.Header().Set("Access-Control-Allow-Origin", "*.minionflo.net")

	now := time.Now()              // find the time right now
	HomePageVars := PageVariables{ //store the date and time in a struct
		Date: now.Format("02-01-2006"),
		Time: now.Format("15:04:05"),
	}

	t, err := template.ParseFiles("public/index.html") //parse the html file homepage.html
	if err != nil {                                    // if there is an error
		log.Print("template parsing error: ", err) // log it
	}
	err = t.Execute(w, HomePageVars) //execute the template and pass it the HomePageVars struct to fill in the gaps
	if err != nil {                  // if there is an error
		log.Print("template executing error: ", err) //log it
	}
}

func main() {
	mux := http.NewServeMux()
	fs := http.FileServer(http.Dir("public/assets"))
	mux.Handle("/assets/", http.StripPrefix("/assets/", fs))
	mux.HandleFunc("/", handler)
	http.ListenAndServe(":"+"8080", mux)
}

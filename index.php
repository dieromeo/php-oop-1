<?php

/**
 * Movie
 */
class Movie
{
    public $titolo;
    public $genere;
    public $durata;

    /**
     * __construct
     *
     * @param  mixed $_titolo del film
     * @param  mixed $_genere
     * @param  mixed $_durata
     * @return void
     */
    function __construct($_titolo, $_genere, $_durata)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }

    /**
     * getGenereToLower ritorna il genere del film in minuscolo
     *
     * @return string
     */
    private function getGenereToLower()
    {
        return strtolower($this->genere);
    }

    /**
     * suggerimentoEta controlla se il genere del film è nella lista e restituisce un suggeriento all'utente
     *
     * @return void
     */
    public function suggerimentoEta()
    {
        $generi_per_adulti = ["horror", "thriller", "guerra"];
        if (in_array($this->getGenereToLower(), $generi_per_adulti)) {
            echo "Film consigliato ad un pubblico maggiorenne";
        }
    }
}

$faf = new Movie("Fast and Furious", "Azione", "2h.55m");
$lotr = new Movie("Il Signore degli Anelli", "Fantasy", "3h.14m");

$films = [$faf, $lotr];

foreach ($films as $film) {
    echo "Il titolo è: " . $film->titolo . "<br>";
    echo "Il genere è: " . $film->genere . "<br>";
    echo "La durata è: " . $film->durata . "<br>";
    echo "<hr>";
}

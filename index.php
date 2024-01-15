<?php

/**
 * Movie
 */
class Movie
{
    public $titolo;
    public array $generi = [];
    public $durata;

    /**
     * __construct
     *
     * @param  mixed $_titolo
     * @param  mixed $_genere
     * @param  mixed $_durata
     * @return void
     */
    function __construct($_titolo, $_genere, $_durata)
    {
        $this->titolo = $_titolo;
        if (is_array($_genere) && !empty($_genere)) {
            $this->generi = $_genere;
        }
        $this->durata = $_durata;
    }

    /**
     * getGenereToLower ritorna un array contenente i generi in minuscolo
     *
     * @return string
     */
    public function getGenereToLower()
    {
        $generi_minuscoli = [];
        foreach ($this->generi as $genere_singolo) {
            $generi_minuscoli[] = strtolower($genere_singolo);
        }
        return $generi_minuscoli;
    }

    /**
     * suggerimentoEta controlla se il genere del film è nella lista e restituisce un suggeriento all'utente
     *
     * @return void
     */
    public function suggerimentoEta()
    {
        $generi_per_adulti = ["horror", "thriller", "guerra"];
        $generi_film = $this->getGenereToLower();
        if (!empty(array_intersect($generi_per_adulti, $generi_film))) {
            echo "Visione consigliata ad un solo pubblico maggiorenne";
        } else {
            echo "E' un film adatto a tutti";
        }
    }
}

$faf = new Movie("Fast and Furious", ["azione"], "2h.55m");
$lotr = new Movie("Il Signore degli Anelli", ["Fantasy", "Azione"], "3h.14m");

$films = [$faf, $lotr];

foreach ($films as $film) {
    echo "Il titolo è: " . $film->titolo . "<br>";
    if (count($film->generi) > 1) {
        echo "I generi sono: ";
    } else {
        echo "Il genere è: ";
    }

    foreach ($film->generi as $genere) {
        echo $genere . " ";
    };
    echo "<br>";
    echo "La durata è: " . $film->durata . "<br>";
    echo "<hr>";
}

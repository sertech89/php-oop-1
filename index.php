<!-- create un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo 
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valore delle relative proprietà -->

<?php
// classe 'Movie'
class Movie {
    // variabili d'istanza
    public $titolo;
    public $anno;
    public $regista;
    public $produzione;

    // costruttore
    public function __construct($_titolo, $_anno, $_regista, $_produzione){
        $this -> titolo = $_titolo;
        $this -> anno = $_anno;
        $this -> regista = $_regista;
        $this -> produzione = $_produzione;
    }

    // metodi 
    public function getTitolo(){
        return $this -> titolo;
    }

    public function getAnno(){
        return $this -> anno;
    }

    public function getRegista(){
        return $this -> regista;
    }

    public function getProduzione(){
        return $this -> produzione;
    }

}

// istanzo PRIMO OGGETTO
$joker = new Movie("Joker", 2019, "Todd Phillips", "Warner Bros. Pictures");

// lo STAMPO
echo "<p>Titolo: " . $joker -> titolo . "</p>";
echo "<p>Anno: " . $joker -> anno . "</p>";
echo "<p>Regista: " . $joker -> regista . "</p>";
echo "<p>Casa di Produzione: " . $joker -> produzione . "</p>";

echo $joker -> titolo . " - " . $joker -> anno . " - " . $joker -> regista . " - " . $joker -> produzione . "</p>";

// istanzo il SECONDO OGGETTO
$batman = new Movie("Batman", 1989, "Tim Burton", "Warner Bros. Pictures");

// lo STAMPO usando i METODI
echo "<p>-------------------------------------------------</p>";
echo "<p>Titolo: " . $batman -> getTitolo() . "</p>";
echo "<p>Anno: " . $batman -> getAnno() . "</p>";
echo "<p>Regista: " . $batman -> getRegista() . "</p>";
echo "<p>Casa di Produzione: " . $batman -> getProduzione() . "</p>";

echo $batman -> getTitolo() . " - " . $batman -> getAnno() . " - " . $batman -> getRegista() . " - " . $batman -> getProduzione() . "</p>";

?>
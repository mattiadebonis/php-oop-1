<?php 
    include __DIR__ . "/partial/movie.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $starwarsIV = new Movie(
            "Star Wars Episodio IV - Una nuova speranza",
            "Fantascienza", 
            5,
            "Il film vede come protagonisti Luke Skywalker, Obi-Wan Kenobi, Han Solo, la principessa Leia Organa, R2-D2, C-3PO e l'Alleanza Ribelle che cercano di distruggere la stazione spaziale corazzata imperiale Morte Nera.",
            1977
        );

        $starwarsV = new Movie(
            "Star Wars Episodio V - L'impero colpisce ancora",
            "Fantascienza",
            5,
            "L'Impero colpisce ancora (The Empire Strikes Back) è un film del 1980, ed è il secondo film (in ordine di uscita) della saga di Star Wars.",
            1980
        );
        


        
        echo "<h1>" . $starwarsIV->title . "</h1>";
        echo "<h2>Genere: " . $starwarsIV->genre . "</h2>";
        echo "<h3>Voto: " . $starwarsIV->ranking . "</h3>";
        echo "<p>Descrizione: " . $starwarsIV->description . "</p>";
        echo "<p> Anno uscita: " . $starwarsIV->year . "</p>";
        echo "<p>Età film: " . $starwarsIV->getAge($starwarsIV->year) . "</p>";


        echo "<h1>" . $starwarsV->title . "</h1>";
        echo "<h2>Genere: " . $starwarsV->genre . "</h2>";
        echo "<h3>Voto:" . $starwarsV->ranking . "</h3>";
        echo "<p>Descrizione: " . $starwarsV->description . "</p>";
        echo "<p>Eta film:" . $starwarsV->getAge($starwarsV->year) . "</p>";



        
    
        
              
    ?>
</body>
</html>
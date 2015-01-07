<html>
    <head>
        <title>Pra¡ce s proennymi</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    </head>
    <body>
<?php
// promenne vzdy zacinaji znakem dolaru $
// pred pouzitim promenne musi byt do ni vzdy prirazena hodnota
// nazvy promennych jsou case sensitive (citlive na velikost pismen)

$promenna = "ahoj";
$PROMENNA = "nazdar";
$PrOmEnNa = "hovno";

// v kazde promenne je jina hodnota
var_dump($promenna, $PROMENNA, $PrOmEnNa);

// promenne mohou obsahovat ruzne typy
$celeCislo = 1;
$desetinneCislo = 3.14;
$retezec = "vomrdame kneze a zapalime kriz";
$logickaHodnota = true;     // logicka hodnota ma hodnotu true (pravda) nebo false (nepravda)

var_dump($celeCislo, $desetinneCislo, $retezec);

// v prubehu programu muzeme zmenit typ promenne prirazenim nove hodnoty
$ruzneTypy = 23; // priradime do promenne cele cislo 23
$ruzneTypy = "diglet"; // a ted tam priradime retezec - v PHP je toto mozne

var_dump($ruzneTypy);

// promennou muzeme vytvorit i prirazenim vysledku operace s jinymi promennymi
$a = 10;
$b = 20;
$vysledek = $a + $b; // secteme hodnota v promennych $a a $b

var_dump($a, $b, $vysledek);

/**
 * SHRNUTI:
 * promenne zacinaji vzdy znakem $
 * prd pouzitim promenne je potreba do ni priradit nejakou hodnotu
 * prirazeni se provadi operatorem = (rovna se)
 * promenna muze obsahovat ruzne datove typy
 * zakldani datove typy jsou 4:
 *   - cele cislo (int)
 *   - desetinne cislo (double)
 *   - retezec (string)
 *   - logicka hodnota (bool)
 */
?>
    </body>
</html>

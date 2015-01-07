<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <title>Komentare</title>
    </head>
    <body>
    <!-- takto vypada komentar v HTML 
    komentar muze byt i na vic radku
    co je v komentari, prohlizec ignoruje
    tyto komentare se zpracovavaji (prskakuji) na strane prohlizece
    -->
    <?php
// tohle je komentar na jeden radek
$x = 56; // od dvou lomitek za sebou preskakuje PHP vse az do konce radku

/*
 * PHP umi take komentare na vice radku
 * dokud nedojde k ukonceni muzu si psat co chci
 * hvezdicka na zacatku radku neni povinna, ale je dobry zvyk ji psat
kdyz tam hvezdicka neni (jako na tomto rakdu), tak to vypada osklive
 */

 /*
  * vse mezi <?php a ?> zpracovava server
  * ostatni HTML server ignoruje a posila prohlizeci
  */
    ?>
    </body>
</html>

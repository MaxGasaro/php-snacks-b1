<?php

$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

//$sentences = preg_split('/.*?[?.!]+\s+/', $paragrafo);

$sentences = explode('.', $paragrafo);

//var_dump($sentences); NO!!! si usa solo durante le fasi di debug

for ($i = 0; $i < count($sentences); $i++) {
    echo "<p> $sentences[$i] </p>"; //giusto usare apici doppi che funzionano come i backtick in js, con apici singoli avrei dovuto fare concatenazione con '.'
}
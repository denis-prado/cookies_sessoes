<?php

/* Setando cookie, 'time()' pega a hota atual, números calculados em segundos */
setcookie('meunome', 'Denis', time() + (3600*24));

/* var_dump -> imprime valores de um array */
var_dump($_COOKIE['meunome']);
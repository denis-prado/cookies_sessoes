<?php
session_start(); /* iniciando uma sessão */

/*variáel super 'SESSION' está recebendo um array */
$_SESSION['usuário']=[
    'nome' => 'denis',
    'idade' => 24,
];

// unset($_SESSION['usuario']); -> encerra a sessãovariável

/* A sessão é iniciada quando a pagina é carregada e enquanto o navegador estiver aberto
a sessão irá continuar ativa, somente após o fechamento do navegador que a sessão é encerrada */

/*
session_destroy(); destroi a sessão e apaga tudo
--------------------------------------------------------+
$_SESSION['nome']= 'Denis';                             +
$_SESSION['idade']= 24;                                 +
                                                        +
unset($_SESSION['idade']); -> apaga somente a váriavel  +
--------------------------------------------------------+

$_SESSION['idade'] = null; -> passando valor nulo

*/
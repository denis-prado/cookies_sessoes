<?php
//inicia a sessão
session_start();

//destroi a sessão
session_destroy();

//carrega a pagina para index.php
header('location: index.php');
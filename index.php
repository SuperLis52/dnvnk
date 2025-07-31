<?php
$password = 'E666EE63';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Доступ запрещен';
    exit;
}

<html>
    <head>
        <title>Дневник</title>
        <link>
    </head>
    <body>
        <header>
            <img src=""/>
            <h4>SuperLisSites</h4>
        </header>
        <main>
            <h1>Мой дневничок</h1>
        </main>
        <footer>
            <p> 2025 ©SuperLisSites - Byography</p>
        </footer>
    </body>
    
</html>

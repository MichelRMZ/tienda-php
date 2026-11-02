<?php
function conectar(): PDO {
    return new PDO(
        'pgsql:host=localhost;port=5432;dbname=tienda',
        'postgres',
        'Tu_contraseña',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
}


<?php

spl_autoload_register(function (string $nameClassCompleted) {
    $filePath = str_replace('Alura\\Bank', 'src', $nameClassCompleted);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
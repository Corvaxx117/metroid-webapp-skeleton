<?php
// Définition de l'URL de base
define('APP_BASE_URL', $_ENV['APP_BASE_URL'] ?? $_SERVER['APP_BASE_URL'] ?? 'http://chemin-vers-mon-site/public');
define('VIEW_PATH', dirname(__DIR__, 2) . '/mon-projet/template/');

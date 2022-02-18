<?php
if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'accueil';

switch ($route) {
    case 'accueil':
        include __DIR__ . '/controllers/accueil-controller.php';
        break;
}

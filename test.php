<?php
require_once 'config/doctrine.php';
$entityManager = getEntityManager();
if ($entityManager) {
    echo "EntityManager is initialized";
} else {
    echo "EntityManager failed to initialize";
}

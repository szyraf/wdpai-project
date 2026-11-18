<?php

declare(strict_types=1);

// Dane bazy przychodzą z .env przez docker-compose.yaml, więc hasło nie trafia do repozytorium.
define('DB_HOST', (string) getenv('DB_HOST'));
define('DB_PORT', (int) getenv('DB_PORT'));
define('DB_NAME', (string) getenv('DB_NAME'));
define('DB_USERNAME', (string) getenv('DB_USERNAME'));
define('DB_PASSWORD', (string) getenv('DB_PASSWORD'));

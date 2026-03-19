<?php

// Minutagem de onde parei: 29:19

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

if (API_IS_ACTIVE) {
    echo Response::json(200, 'success', [
        'version' => API_VERSION,
        'status' => 'active'
    ]);
} else {
    echo Response::json(200, 'success', [
        'version' => API_VERSION,
        'status' => 'in maintenance'
    ]);
}

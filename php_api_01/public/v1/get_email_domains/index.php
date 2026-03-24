<?php

// Retornando todos os domínios de email.

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '/../../../api_core/response.php';

$data = require_once __DIR__ . '/../../../api_core/data.php';

$email_domains = array();

foreach($data as $person) {
    // Verificando se o email é válido.
    if (filter_var($person['email'], FILTER_VALIDATE_EMAIL)) {

        // Separando o email pelo "@" 'nome'[0], '@email.com'[1]
        $email_domain = explode('@', $person['email'])[1];
        if (!in_array($email_domain, $email_domains)) {
            $email_domains[] = $email_domain;
        }
    }
}

echo Response::json(200, 'success', $email_domains);
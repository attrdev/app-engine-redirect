<?php

    const DEFAULT_URL = 'https://attr.dev';
    const DEFAULT_RESPONSE_CODE = 302;

    $redirectUrl = $_ENV['REDIRECT_URL'] ?? DEFAULT_URL;
    $redirectResponseCode = ((int) $_ENV['REDIRECT_RESPONSE_CODE']) ?? DEFAULT_RESPONSE_CODE;

    header(sprintf('Location: %s',$redirectUrl), true, $redirectResponseCode);
    exit();
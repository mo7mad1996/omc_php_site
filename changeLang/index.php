<?php
    include '../includes/helpers/site_lang.php';
    if($site_lang == 'en') {
        setcookie('site_lang', 'ar', time() + (60 * 60 * 24 * 365), '/');
    } else {
        setcookie('site_lang', 'en', time() + (60 * 60 * 24 * 365), '/');
    }

    header("Location: /" );
<?php
    include 'includes/helpers/site_lang.php';

    
    // if site any lang else ar or en make a defult lang
    if(!($site_lang == 'ar')){
        $site_lang  = 'en';
        $page_title = 'Home';
    } else {
        $page_title = 'الرئيسيه';
    }
    
   
    include_once './includes/helpers/head.php';
    
    // template
    include_once './includes/components/header/index.php';
    
    include "./includes/components/home/index.php";
    
    include_once './includes/components/footer/index.php';
    include_once './includes/helpers/pageEnd.php';
    
?>
<?php
  // set lang site
  $site_lang = 
      isset($_COOKIE['site_lang']) ?
        $_COOKIE['site_lang'] :
        substr($_SERVER["HTTP_ACCEPT_LANGUAGE"] , 0 , 2); 
        
  // domain link
  // $domain = http://localhost
  $domain = $_SERVER['REQUEST_SCHEME'] . "://" .  $_SERVER['SERVER_NAME'] ;
  
<?php

  class link {
    var $to;
    var $title;
    var $color;
    var $icon;
  }

  function createLink( $to, $title, $color, $icon ){
    $link = new link();

    $link->to = $to;
    $link->title = $title;
    $link->color = $color;
    $link->icon = $icon;

    return $link;
  }

  
  if($site_lang == 'ar') {
    $links = array (
      createLink('/changeLang?from='. $_SERVER['HTTP_HOST'], 'English', '#ff5733', 'fas fa-language'),
      createLink('https://www.twitter.com/', 'تويتر', '#57c6f5', 'fab fa-twitter'),
      createLink('https://www.facebook.com/', 'فيسبوك', '#365295', 'fab fa-facebook-f'),
      createLink('https://www.youtube.com/', 'يوتيوب', '#f83330', 'fab fa-youtube'),
      createLink('https://www.instagram.com/', 'انستجرام', '#365295', 'fab fa-instagram'),
      createLink('https://www.facebook.com/facebook-wifi/', 'فيسبوك واي فاي', '#fbbd00', 'fas fa-wifi'),
    );
  } else {
    $links = array(
      createLink('/changeLang?from='. $_SERVER['HTTP_HOST'], 'العربيه', '#ff5733', 'fas fa-language'),
      createLink('https://www.twitter.com/', 'twitter', '#57c6f5', 'fab fa-twitter'),
      createLink('https://www.facebook.com/', 'facebook', '#365295', 'fab fa-facebook-f'),
      createLink('https://www.youtube.com/', 'youtube', '#f83330', 'fab fa-youtube'),
      createLink('https://www.instagram.com/', 'instagram', '#246194', 'fab fa-instagram'),
      createLink('https://www.facebook.com/facebook-wifi/', 'facebook wifi', '#fbbd00', 'fas fa-wifi'),
    );
  }

?>

<div class="form">
    <ul class="links">

        <?php foreach ($links as $link) {
          // _blank
          echo "
            <a href='$link->to' style='background: $link->color' title='$link->title' target=''>
              <li>
                <i class='$link->icon'></i>
              </li>
            </a>
          ";
        }?>
    </ul>

    <form>
        <input placeholder="<?php echo ( $site_lang == 'ar' ? 'البحث' : 'Search' )?>"/>
        <button type="submit">
          <i class="fas fa-search"></i>
        </button>
    </form>
</div>
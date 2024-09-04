<?php
$currentPage = get_page_uri();

if(get_page_uri() === 'home') {
    $currentPage = 'Where Nature Nurtures Every Moment';
}

echo '
<div class="hero">
    <div class="hero-text">'. ucfirst($currentPage).'</div>
    <img class="hero-img" src="'.get_template_directory_uri() . '/img/heros/' . get_page_uri() .'.png" alt="">
</div>
';

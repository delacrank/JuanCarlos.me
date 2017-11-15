<?php
function display_header($title) {
    $output = '<!doctype html>';
    $output .= '<html>';
    $output .= '<head>';
    $output .= '<title>'.$title.'</title>';
    $output .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    $output .= '<link rel="stylesheet" href="CSS/stylesheet.css">';
    $output .= '<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Unica+One|Crushed|Sorts+Mill+Goudy" rel="stylesheet">';
    $output .= '</head>';
    $output .= '<body>';
    return $output;
}

function display_navigation() {
    $output = '<nav class = \'navigation\'>';
    $output .= '<ul id =\'menu\'><li><a href=\'Index.php\'> <img src=\'Images/home.png\'/>  Home</a></li>';    
    $output .= '<li><a href=\'Portfolio.php\'>Portfolio</a>';
    $output .= '<li><a href=\' \'>Anime</a></li>';
    $output .= '<li><a href=\' \'>Games</a></li>';
    $output .= '<li><a href=\' \'>Movies</a></li>';
    $output .= '<li><a href=\' \'>Contact Me</a></li>';
    $output .= '<li id =\'scroll_menu\'><a href=\' \'><img src=\'Images/menu.png\'/></a></li>';
    $output .= '</ul></nav>';
    $output .= '<ul id = \'mini-menu\'>';
    $output .= '<li><a href=\' \'>Anime</a></li>';
    $output .= '<li><a href=\' \'>Games</a></li>';
    $output .= '<li><a href=\' \'>Movies</a></li>';
    $output .= '<li><a href=\' \'>Contact Me</a></li>';
    $output .= '</ul>';
    return $output;
}

function display_footer() {
    $output = '<script type="text/javascript" src="javascript/JSfiles.js" ></script>';
    $output .=  '<footer class =\'footer\'><ul><li><a href=\'Portfolio.php\'>Portfolio</a>';
    $output .= '<li><a href=\' \'>Anime</a></li>';
    $output .= '<li><a href=\' \'>Games</a></li>';
    $output .= '<li><a href=\' \'>Movies</a></li>';
    $output .= '</ul><p class =\'copy_right\'>Copyright &#169; 2017 - Juan Carlos Arias</p></footer>';
    $output .= '</body>';
    $output .= '</html>';
    return $output;
}
?>
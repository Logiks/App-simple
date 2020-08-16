<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$menuF = APPROOT."config/menu.json";
if(file_exists($menuF)) {
    $menuArr = json_decode(file_get_contents($menuF), true);
}

if(!$menuArr) $menuArr = [];

echo "<ul class='sidebar-nav'>";
foreach($menuArr as $a=>$b) {
    $link = _link($a);
    $title = toTitle(_ling($b['title']));
    if($a == PAGE) {
        echo "<li class='active'><a class='menuItem' href='{$link}'>{$title}</a></li>";
    } else {
        echo "<li><a class='menuItem' href='{$link}'>{$title}</a></li>";
    }
}
echo "</ul>";
?>
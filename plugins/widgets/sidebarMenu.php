<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$menuArr = [
        ""=> [
            "title"=> "Home"
        ],
        "modules/uiDemo/general"=> [
            "title"=> "General"
        ],
        "modules/uiDemo/components"=> [
            "title"=> "components"
        ],
        "modules/uiDemo/forms"=> [
            "title"=> "forms"
        ],
        "modules/uiDemo/reports"=> [
            "title"=> "reports"
        ],
        // "modules/uiDemo/views"=> [
        //     "title"=> "views"
        // ],
        // "modules/uiDemo/gallery"=> [
        //     "title"=> "gallery"
        // ],
        // "modules/uiDemo/calendars"=> [
        //     "title"=> "calendars"
        // ],
        "modules/uiDemo/icons"=> [
            "title"=> "icons"
        ],
        "modules/uiDemo/misc"=> [
            "title"=> "misc"
        ],
    ];
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
<?php
defined('MOODLE_INTERNAL') || die();

$_logoutlink = "#";
if (isset($primarymenu["user"]["items"])) {
    // submenu com as configurações de preferencia do usuario
    include('_submenu_userpreference.php');

    // alteração na ordenação do menu
    include('_menu_order.php');
    $key_logout = array_search(get_string('logout'), array_map(fn($p) => isset($p->title) ? $p->title : "", $_menu_items));
    $_logoutlink = array_splice($_menu_items, $key_logout, 1)[0];
}
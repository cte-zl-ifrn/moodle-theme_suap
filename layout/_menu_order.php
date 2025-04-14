<?php

$_menu_items = &$primarymenu["user"]["items"];

$key_userpreference = array_search(get_string('userpreferences'), array_map(fn($p) => $p->title, $_menu_items));
$_userpreference = array_splice($_menu_items, $key_userpreference, 1)[0];

$key_language = array_search(get_string('language'), array_map(fn($p) => $p->title, $_menu_items));
$_language = array_splice($_menu_items, $key_language, 1)[0];

$key_preferences = array_search(get_string('preferences'), array_map(fn($p) => $p->title, $_menu_items));
$p = array_splice($_menu_items, $key_preferences, 1)[0];

$key_logout = array_search(get_string('logout'), array_map(fn($p) => $p->title, $_menu_items));
$_logoutlink = array_splice($_menu_items, $key_logout, 1)[0];

// alterar a ordem dos menus de preferencia de usuario e de idioma
array_unshift($_menu_items, $_userpreference);
array_unshift($_menu_items, $_language);

// adiciona a bandeira no texto do idioma
$langs = \get_string_manager()->get_list_of_translations();
$_submenu_items = &$primarymenu["user"]["submenus"][0]->items;

for ($i = 0; $i < count($_submenu_items); $i++) {
    if ($_submenu_items[$i]['title'] == $langs['en']):
        $_submenu_items[$i]['text'] .= ' 🇺🇸';
    endif;
    if ($_submenu_items[$i]['title'] == $langs['pt_br']):
        $_submenu_items[$i]['text'] .= ' 🇧🇷';
    endif;
}

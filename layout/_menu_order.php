<?php
//Get item user preferences
$key_preference = array_search(
    get_string('userpreferences'),
    array_map(fn($p) => $p->title, $primarymenu["user"]["items"])
);
$_preference = array_splice($primarymenu["user"]["items"], $key_preference, 1)[0];
array_unshift($primarymenu["user"]["items"], $_preference);

//Get language menu
$key_language = array_search(
    get_string('language'),
    array_map(fn($p) => $p->title, $primarymenu["user"]["items"])
);
$_language = array_splice($primarymenu["user"]["items"], $key_language, 1)[0];
array_unshift($primarymenu["user"]["items"], $_language);

//Remove preferences from menu
$key_preferences = array_search(
    get_string('preferences'),
    array_map(fn($p) => $p->title, $primarymenu["user"]["items"])
);
array_splice($primarymenu["user"]["items"], $key_preferences, 1)[0];

//Get logout link to be last one
$key_logout = array_search(
    get_string('logout'),
    array_map(fn($p) => $p->title, $primarymenu["user"]["items"])
);
$_logoutlink = array_splice($primarymenu["user"]["items"], $key_logout, 1)[0];

//Add flags to language
for ($i = 0; $i < count($primarymenu["user"]["submenus"][0]->items); $i++) {
    if ($primarymenu["user"]["submenus"][0]->items[$i]['title'] == "English ‎(en)‎"):
        $primarymenu["user"]["submenus"][0]->items[$i]['text'] .= ' 🇺🇸';
    endif;
    if ($primarymenu["user"]["submenus"][0]->items[$i]['title'] == "Português - Brasil ‎(pt_br)‎"):
        $primarymenu["user"]["submenus"][0]->items[$i]['text'] .= ' 🇧🇷';
    endif;
}

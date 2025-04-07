<?php
if ($primarymenu["user"]["items"]):
    $preferences_submenu = [
        [
            'title' => get_string('externalblogs', 'blog'),
            'url' => '/blog/external_blogs.php',
        ],
        [
            'title' => get_string('managebackpacks', 'badges'),
            'url' => '/badges/mybackpack.php',
        ],
        [
            'title' => get_string('mybadges', 'badges'),
            'url' => '/badges/mybadges.php',
        ],
        [
            'title' => get_string('editmyprofile'),
            'url' => '/user/edit.php?id=' . $USER->id
        ],
        [
            'title' => get_string('changepassword'),
            'url' => '/login/change_password.php'
        ],
        [
            'title' => get_string('contentbankpreferences', 'core_contentbank'),
            'url' => '/user/contentbank.php',
        ],
        [
            'title' => get_string('calendarpreferences', 'calendar'),
            'url' => '/user/calendar.php',
        ],
        [
            'title' => get_string('editorpreferences'),
            'url' => '/user/editor.php'
        ],
        [
            'title' => get_string('preferences', 'badges'),
            'url' => '/badges/preferences.php',
        ],

        [
            'title' => get_string('forumpreferences'),
            'url' => '/user/forum.php'
        ],
        [
            'title' => get_string('notificationpreferences', 'message'),
            'url' => '/message/edit.php',
        ],
        [
            'title' => get_string('preferredlanguage'),
            'url' => '/user/language.php'
        ],








    ];

    $menu_obj = new stdClass();
    $menu_obj->title = get_string('userpreferences');
    $menu_obj->itemtype = 'submenu-link';
    $menu_obj->submenuid = 'user-preference';
    $menu_obj->submenulink = true;

    $primarymenu["user"]["items"][3] = $menu_obj;

    $submenu_obj = new stdClass();
    $submenu_obj->id = 'user-preference';
    $submenu_obj->title = get_string('preferences');

    foreach ($preferences_submenu as $_submenu):
        $submenu_obj->items[] = [
            'title' => $_submenu['title'],
            'text' => $_submenu['title'],
            'link' => true,
            'isactive' => false,
            'url' => new core\url($_submenu['url'])
        ];
    endforeach;

    $primarymenu["user"]["submenus"][] = $submenu_obj;
endif;

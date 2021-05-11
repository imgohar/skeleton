<?php
// Aside menu



return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        
        

        [
            'title' => 'Teams',
            'root' => true,
            'icon' => 'media/svg/icons/General/Shield-check.svg',
            'page' => '/a',
            // 'visible' => 'preview',
        ],
        [
            'title' => 'Roles',
            'root' => true,
            'icon' => 'media/svg/icons/Tools/Tools.svg',
            'page' => '/d',
            // 'visible' => 'preview',
        ],
        [
            'title' => 'Users',
            'root' => true,
            'icon' => 'media/svg/icons/General/User.svg',
            'page' => '/s',
            // 'visible' => 'preview',
        ],

       
    ]

];

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
            'title' => 'Public Cloud',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Compute',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Default',
                            'page' => 'test',
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/user/list-datatable'
                        ],
                        [
                            'title' => 'List - Columns 1',
                            'page' => 'custom/apps/user/list-columns-1'
                        ],
                        [
                            'title' => 'List - Columns 2',
                            'page' => 'custom/apps/user/list-columns-2'
                        ],
                        [
                            'title' => 'Add User',
                            'page' => 'custom/apps/user/add-user'
                        ],
                        [
                            'title' => 'Edit User',
                            'page' => 'custom/apps/user/edit-user'
                        ],
                    ]
                ],
                [
                    'title' => 'Storage',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Profile 1',
                            'bullet' => 'line',
                            'submenu' => [
                                [
                                    'title' => 'Overview',
                                    'page' => 'custom/apps/profile/profile-1/overview'
                                ],
                                [
                                    'title' => 'Personal Information',
                                    'page' => 'custom/apps/profile/profile-1/personal-information'
                                ],
                                [
                                    'title' => 'Account Information',
                                    'page' => 'custom/apps/profile/profile-1/account-information'
                                ],
                                [
                                    'title' => 'Change Password',
                                    'page' => 'custom/apps/profile/profile-1/change-password'
                                ],
                                [
                                    'title' => 'Email Settings',
                                    'page' => 'custom/apps/profile/profile-1/email-settings'
                                ]
                            ]
                        ],
                        [
                            'title' => 'Profile 2',
                            'page' => 'custom/apps/profile/profile-2'
                        ],
                        [
                            'title' => 'Profile 3',
                            'page' => 'custom/apps/profile/profile-3'
                        ],
                        [
                            'title' => 'Profile 4',
                            'page' => 'custom/apps/profile/profile-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Network',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Columns',
                            'page' => 'custom/apps/contacts/list-columns'
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/contacts/list-datatable'
                        ],
                        [
                            'title' => 'View Contact',
                            'page' => 'custom/apps/contacts/view-contact'
                        ],
                        [
                            'title' => 'Add Contact',
                            'page' => 'custom/apps/contacts/add-contact'
                        ],
                        [
                            'title' => 'Edit Contact',
                            'page' => 'custom/apps/contacts/edit-contact'
                        ]
                    ]
                ],
                [
                    'title' => 'Containers & Orchestrations',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Columns 1',
                            'page' => 'custom/apps/projects/list-columns-1'
                        ],
                        [
                            'title' => 'List - Columns 2',
                            'page' => 'custom/apps/projects/list-columns-2'
                        ],
                        [
                            'title' => 'List - Columns 3',
                            'page' => 'custom/apps/projects/list-columns-3'
                        ],
                        [
                            'title' => 'List - Columns 4',
                            'page' => 'custom/apps/projects/list-columns-4'
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/projects/list-datatable'
                        ],
                        [
                            'title' => 'View Project',
                            'page' => 'custom/apps/projects/view-project'
                        ],
                        [
                            'title' => 'Add Project',
                            'page' => 'custom/apps/projects/add-project'
                        ],
                        [
                            'title' => 'Edit Project',
                            'page' => 'custom/apps/projects/edit-project'
                        ]
                    ]
                ],
                [
                    'title' => 'Data Analytics',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Home 1',
                            'page' => 'custom/apps/support-center/home-1'
                        ],
                        [
                            'title' => 'Home 2',
                            'page' => 'custom/apps/support-center/home-2'
                        ],
                        [
                            'title' => 'FAQ 1',
                            'page' => 'custom/apps/support-center/faq-1'
                        ],
                        [
                            'title' => 'FAQ 2',
                            'page' => 'custom/apps/support-center/faq-2'
                        ],
                        [
                            'title' => 'FAQ 3',
                            'page' => 'custom/apps/support-center/faq-3'
                        ],
                        [
                            'title' => 'Feedback',
                            'page' => 'custom/apps/support-center/feedback'
                        ],
                        [
                            'title' => 'License',
                            'page' => 'custom/apps/support-center/license'
                        ]
                    ]
                ],
                [
                    'title' => 'AI & Machine learning',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Private',
                            'page' => 'custom/apps/chat/private'
                        ],
                        [
                            'title' => 'Group',
                            'page' => 'custom/apps/chat/group'
                        ],
                        [
                            'title' => 'Popup',
                            'page' => 'custom/apps/chat/popup'
                        ]
                    ]
                ]
                
            ]
        ],
        

        [
            'title' => 'Teams',
            'root' => true,
            'icon' => 'media/svg/icons/General/User.svg',
            'page' => '/admin/teams',
            // 'visible' => 'preview',
        ],
        [
            'title' => 'All Users',
            'root' => true,
            'icon' => 'media/svg/icons/General/User.svg',
            'page' => '/admin/all-users',
            // 'visible' => 'preview',
        ],

       
    ]

];

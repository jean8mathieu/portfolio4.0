<?php

/*
|--------------------------------------------------------------------------
| Portfolio Content
|--------------------------------------------------------------------------
|
| Everything shown on the public portfolio page lives here, so the content
| can be updated without touching the Blade markup. Icons use Font Awesome
| class names (https://fontawesome.com/search?ic=free).
|
*/

return [

    'name' => 'Jean-Mathieu Emond',

    'initials' => 'JM',

    'role' => 'Backend Web Developer',

    'location' => 'Quebec, Canada',

    'available' => true,

    'bio' => 'Bilingual developer from Quebec with deep expertise in PHP and web development. I have been building efficient, reliable applications since 2014, including systems used by millions of players on TruckersMP.',

    'stats' => [
        ['value' => '2014', 'label' => 'Shipping code since'],
        ['value' => '4.6M+', 'label' => 'Users served on TruckersMP'],
        ['value' => 'EN / FR', 'label' => 'Fully bilingual'],
    ],

    'links' => [
        'email' => 'jean-mathieu.emond@jmdev.ca',
        'github' => 'https://github.com/jean8mathieu',
        'linkedin' => 'https://www.linkedin.com/in/jean-mathieu-emond-825b72272/',
    ],

    'skills' => [
        [
            'title' => 'Backend',
            'icon' => 'fa-solid fa-server',
            'items' => ['PHP', 'Laravel', 'CakePHP', 'FuelPHP', 'Java'],
        ],
        [
            'title' => 'Databases',
            'icon' => 'fa-solid fa-database',
            'items' => ['MySQL', 'PostgreSQL', 'OracleSQL', 'SQLite', 'MongoDB'],
        ],
        [
            'title' => 'Frontend',
            'icon' => 'fa-solid fa-code',
            'items' => ['HTML', 'CSS', 'JavaScript', 'jQuery', 'Ajax', 'Bootstrap', 'Font Awesome'],
        ],
        [
            'title' => 'Tools & Platforms',
            'icon' => 'fa-solid fa-screwdriver-wrench',
            'items' => ['Docker', 'Git', 'CI/CD', 'Testing', 'Linux', 'Windows', 'macOS'],
        ],
    ],

    'projects' => [
        [
            'name' => 'TruckersMP',
            'icon' => 'fa-solid fa-truck',
            'featured' => true,
            'description' => 'Multiplayer experience for Euro Truck Simulator 2 and American Truck Simulator with 4.6M+ registered users.',
            'highlights' => [
                'Created the ban appeal system',
                'Created the report system',
                'Implemented the news system',
                'Developed the notifications system',
                'Created the VTC system',
                'Reworked the user profile page',
            ],
            'stack' => ['Laravel', 'PHP', 'MySQL', 'jQuery', 'Bootstrap'],
            'url' => 'https://truckersmp.com',
        ],
        [
            'name' => 'Portfolio Website',
            'icon' => 'fa-solid fa-id-card',
            'description' => 'This site: a professional portfolio built on the latest version of Laravel.',
            'highlights' => [
                'Automated test suite',
                'Factories & seeders',
                'Easy content management',
                'Markdown support',
            ],
            'stack' => ['Laravel', 'PHP', 'Tailwind CSS', 'Pest'],
        ],
        [
            'name' => 'Address to Coordinates',
            'icon' => 'fa-solid fa-location-dot',
            'description' => 'Converts street addresses to latitude and longitude using multiple mapping APIs.',
            'highlights' => [
                'Multiple API integrations',
                'Google Maps visualization',
                'JSON / XML response viewer',
                'Fully dynamic interface',
            ],
            'stack' => ['JavaScript', 'jQuery', 'Google Maps', 'CSS'],
        ],
        [
            'name' => 'Live Chat',
            'icon' => 'fa-solid fa-comments',
            'description' => 'Real-time chat application built on WebSockets.',
            'highlights' => [
                'WebSocket implementation',
                'Real-time communication',
                'Message encoding / decoding',
                'Server-client architecture',
            ],
            'stack' => ['WebSocket', 'PHP', 'JavaScript', 'jQuery'],
        ],
    ],

];

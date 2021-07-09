<?php 

$menu = [
    [
        'href' =>route('home'),
        'text' => 'Home'
    ],
    [
        'href' =>route('characters'),
        'text' => 'Characters'
    ],
    [
        'href' =>route('comics'),
        'text' => 'Comics'
    ]
]

?>
<header id="site_header">

    <div class="topnav">
        DC POWER ADDITIONAL SITES
    </div>

    <div class="main_menu">
        main menu
            <nav>
                <ul>
                    @forheach($menu as $item)
                    <li><a href="{{'}}"></a></li>
                </ul>
            </nav>
    </div>

</header>
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
    ],

    [
        'href' =>route('movies'),
        'text' => 'Movies'
    ],

    [
        'href' =>route('tv'),
        'text' => 'TV'
    ],

    [
        'href' =>route('games'),
        'text' => 'Games'
    ],

    [
        'href' =>route('collectibles'),
        'text' =>'Collectibles'
    ],
  
    [
        'href' =>route('videos'),
        'text' => 'Videos'
    ],

    [
        'href' =>route('fans'),
        'text' => 'Fans'
    ],
   
    [
        'href' =>route('news'),
        'text' => 'news'
    ],

    [
        'href' =>route('shop'),
        'text' => 'Shop'
    ],
]
 
?>
<header id="site_header">

    <div class="topnav">
        DC POWER ADDITIONAL SITES
    </div>

    <div class="nav_menu">
        
            <nav>
                <ul>
                    @foreach($menu as $item)
                   <li><a href="{{$item['href']}}">{{$item['text']}}</a></li> 
                    @endforeach
                </ul>
            </nav>
    </div>

</header>
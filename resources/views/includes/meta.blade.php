    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <meta name="description" content="@yield('description', config('app.description'))"/>
    <meta name="keywords" content="@yield('keywords', config('app.keywords'))"/>
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.author') }}"/>
    <meta name="application-name" content="@yield('title', config('app.name'))">
    <!--GEO Tags-->
    <meta name="DC.title" content="@yield('title', config('app.name'))"/>
    <meta name="geo.region" content="LK" />
    <meta name="geo.position" content="7.873054;80.771797" />
    <meta name="ICBM" content="7.873054, 80.771797" />
    <!--Facebook Tags-->
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:title" content="@yield('title', config('app.name'))"/>
    <meta property="og:description" content="@yield('description', config('app.description'))"/>
    <meta property="og:image" content="{{ request()->root() }}/images/TODO.png"/>
    <meta property="article:author" content="https://www.facebook.com/tharindubrosl"/>
    <meta property="og:locale" content="en_UK"/>
    <!--Twitter Tags-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{ '@' . config('app.name') }}"/>
    <meta name="twitter:title" content="@yield('title', config('app.name'))"/>
    <meta name="twitter:description" content="@yield('description', config('app.description'))"/>
    <meta name="twitter:image" content="{{ request()->root() }}/images/TODO.png"/>

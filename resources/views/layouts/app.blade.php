<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" href="https://conexa.ai/wp-content/uploads/2021/03/favicon.png" sizes="192x192" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div class="container mt-4" style="margin-bottom: 80px;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="219.41" height="63.547" viewBox="0 0 219.41 63.547"><defs><clipPath id="a"><path d="M849.86,226a3.149,3.149,0,0,0-1.4.337L823.494,240.75A3.325,3.325,0,0,0,822,243.3v13.3a1.091,1.091,0,0,0,1.109,1.108,2.952,2.952,0,0,0,2.94-2.94v-9.11a3.25,3.25,0,0,1,1.494-2.555l20.871-12.05a3.325,3.325,0,0,1,3.085.048l14.557,9.255c2.073,1.3,2.121,3.519.1,4.916l-1.349.964a3.385,3.385,0,0,1-3.182.145l-10.17-5.88a3.168,3.168,0,0,0-2.94,0l-12.773,7.326a3.326,3.326,0,0,0-1.494,2.555v14.219l-8.387,5.591c-2.121,1.4-2.073,3.663.048,4.965l22.558,13.978a3.227,3.227,0,0,0,3.037.048l24.968-14.412a3.325,3.325,0,0,0,1.494-2.555V259.933a2.952,2.952,0,0,0-2.94-2.94,1.091,1.091,0,0,0-1.109,1.109v11.761a3.325,3.325,0,0,1-1.494,2.555l-20.871,12.05a3.325,3.325,0,0,1-3.085-.048l-14.316-9.11c-2.217-1.4-2.169-3.663.048-5.013l1.4-.868a3.367,3.367,0,0,1,3.036-.048l9.881,5.688a3.17,3.17,0,0,0,2.94,0L862.1,268.9a2.978,2.978,0,0,0,1.06-4.049,1.1,1.1,0,0,0-1.542-.386l-10.17,5.881a3.17,3.17,0,0,1-2.94,0l-8.676-5.013a3.325,3.325,0,0,1-1.494-2.555V252.751a3.325,3.325,0,0,1,1.494-2.555l8.676-5.013a3.17,3.17,0,0,1,2.94,0l10.6,6.121a3.19,3.19,0,0,0,3.085-.1l8.917-5.88c2.121-1.4,2.073-3.663-.048-4.965l-22.558-13.978a2.863,2.863,0,0,0-1.494-.386Z" transform="translate(-822 -226)" fill="none"/></clipPath><clipPath id="b"><rect width="55.974" height="63.718" fill="none"/></clipPath><clipPath id="c"><rect width="55.961" height="63.673" fill="none"/></clipPath></defs><path d="M1121.87,324.967c0-7.278,5.447-12.436,13.159-12.436,4.724,0,8.483,1.976,10.363,5.639l-4.386,2.555a6.867,6.867,0,0,0-6.073-3.374c-4.193,0-7.375,2.892-7.375,7.616s3.181,7.616,7.375,7.616a6.977,6.977,0,0,0,6.073-3.374l4.386,2.555c-1.88,3.615-5.639,5.688-10.363,5.688C1127.317,337.4,1121.87,332.245,1121.87,324.967Z" transform="translate(-1053.57 -292.822)" fill="#1c1c1c"/><path d="M1246.56,324.967c0-4.627-3.085-7.616-7.23-7.616-4.1,0-7.182,2.94-7.182,7.616,0,4.627,3.085,7.616,7.182,7.616C1243.427,332.534,1246.56,329.594,1246.56,324.967Zm-20.148,0c0-7.278,5.447-12.436,12.918-12.436,7.568,0,12.966,5.158,12.966,12.436s-5.4,12.484-12.966,12.484C1231.859,337.4,1226.412,332.245,1226.412,324.967Z" transform="translate(-1134.301 -292.822)" fill="#1c1c1c"/><path d="M1377.977,323.183v13.93h-5.688V323.906c0-4.338-2.121-6.41-5.784-6.41-4.049,0-6.8,2.458-6.8,7.326v12.291h-5.688V312.82h5.4v3.133c1.88-2.217,4.82-3.422,8.387-3.422C1373.639,312.531,1377.977,315.857,1377.977,323.183Z" transform="translate(-1232.844 -292.822)" fill="#1c1c1c"/><path d="M1478.8,322.828h13.786a6.588,6.588,0,0,0-6.844-5.929A6.709,6.709,0,0,0,1478.8,322.828Zm19.088,3.759h-19.039c.675,3.567,3.615,5.832,7.857,5.832a8.68,8.68,0,0,0,6.6-2.651l3.037,3.519c-2.169,2.6-5.591,3.952-9.785,3.952-8.146,0-13.4-5.254-13.4-12.484s5.3-12.436,12.532-12.436c7.086,0,12.291,4.965,12.291,12.532C1497.988,325.382,1497.94,326.057,1497.892,326.587Z" transform="translate(-1324.851 -292.659)" fill="#1c1c1c"/><path d="M1597.516,338.094l-6.218-8.435-6.266,8.435h-6.266l9.447-12.339-9.062-11.954h6.314l5.977,7.953,5.977-7.953h6.122l-9.11,11.857,9.5,12.436Z" transform="translate(-1406.4 -293.803)" fill="#1c1c1c"/><path d="M1704.726,327.57c0,3.952-2.265,6.362-6.507,6.362-2.121,0-4.338-.723-4.338-3.085,0-3.663,5.543-4.145,9.447-4.145h1.4Zm-5.35-15.039a17.239,17.239,0,0,0-10.266,2.989l2.217,4.145a12.072,12.072,0,0,1,7.375-2.41c4.049,0,6.025,1.976,6.025,5.254v.386h-6.266c-7.375,0-10.074,3.181-10.074,7.23,0,4.242,3.519,7.278,9.062,7.278,3.615,0,6.266-1.2,7.664-3.278v2.94h5.351V322.846C1710.414,315.857,1706.365,312.531,1699.376,312.531Z" transform="translate(-1491.052 -292.822)" fill="#1c1c1c"/><g transform="translate(0 0)"><g clip-path="url(#a)"><g style="isolation:isolate"><g clip-path="url(#b)"><g transform="translate(0 0)"><g clip-path="url(#c)"><g clip-path="url(#c)"><image width="56.031" height="63.738" transform="translate(-0.036 -0.018)" xlink:href="data:image/png;base64,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"/></g></g></g></g></g></g></g></svg>
            </div>
        </header>
    
        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container mt-3" style="text-align: end; margin-top:35px;">
            <p>By Julia Mart??</p>
            
            </div>
        </footer>
    </div>

</body>
</html>

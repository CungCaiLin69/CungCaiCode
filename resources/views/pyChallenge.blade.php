<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CungCaiCode | Be a Programming Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/challenge.css') }}">

</head>

<body>
    @include('partials.navbar')

    <div id="challenge-layout">
        <div>
            <h1>Python Challenge</h1>

            <ol>
                <li>print "Hello World"</li>
                <li>Loop a number from 1 to 9</li>
                <li>Loop "CungCaiLin" string 3 times</li>
                <li>Split "CungCaiLin" string into "Cung Cai Lin"</li>
                <li>Print a boolean condition where 2 is greater than 1</li>
            </ol>

            <h3>Expected Output</h3>
            <ol>
                <li>"Hello World"</li>
                <li>123456789</li>
                <li>
                    CungCaiLin
                    CungCaiLin
                    CungCaiLin
                </li>
                <li>Cung Cai Lin</li>
                <li>2 is greater than 1</li>
            </ol>
        </div>

        <div>
            <div class="control-panel">
                Select Language:
                &nbsp; &nbsp;
                <select id="languages" class="languages" onchange="changeLanguage()">
                    <option value="c"> C </option>
                    <option value="cpp"> C++ </option>
                    <option value="php"> PHP </option>
                    <option value="python"> Python </option>
                    <option value="node"> Node JS </option>
                </select>
            </div>
            <div class="editor" id="editor"></div>
        
            <div class="button-container">
                <button class="btn btn-primary" onclick="executeCode()"> Run </button>
                <a class="finish-btn" href="/learn">Finish</a>
            </div>
        
            <div class="output"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/lablib/ace.js"></script>
    <script src="/js/lablib/theme-monokai.js"></script>
    <script src="/js/codelab.js"></script>
</body>

</html>
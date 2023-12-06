<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn with CungCaiCode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/learns.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">
</head>
<body>
    @include('partials.navbar')

    <div id="learn-section">
        <h1 class="learn-title">Languages and Technologies For You To Master</h1>
        <p class="learn-sub">Become fluent in your chosen programming languages or other computer technologies by completing these tracks</p>

        <div class="card-group">
            <a href="/learn/html">
                <div class="single-card">
                    <img src="img/html.png" alt="" class="card-img">    
                    <h3>HTML</h3>
                </div>
            </a>
            <a href="/learn/css">
                <div class="single-card">
                    <img src="img/css.png" alt="" class="card-img">    
                    <h3>CSS</h3>
                </div>
            </a>
            <a href="/learn/js">
                <div class="single-card">
                    <img src="img/javascript.png" alt="" class="card-img">
                    <h3>JavaScript</h3>
                </div>
            </a>
            <a href="/learn/php">
                <div class="single-card">
                    <img src="img/php.png" alt="" class="card-img php">
                    <h3>PHP</h3>
                </div>
            </a>
            <a href="/learn/java">
                <div class="single-card">
                    <img src="img/java.png" alt="" class="card-img">
                    <h3>Java</h3>
                </div>
            </a>
            <a href="/learn/python">
                <div class="single-card">
                    <img src="img/python.png" alt="" class="card-img">
                    <h3>Python</h3>
                </div>
            </a>
            <a href="/learn/golang">
                <div class="single-card">
                    <img src="img/golang.png" alt="" class="card-img golang">
                    <h3>GoLang</h3>
                </div>
            </a>
            <a href="/learn/sql">
                <div class="single-card">
                    <img src="img/database.png" alt="" class="card-img">
                    <h3>SQL</h3>
                </div>
            </a>
            <a href="/learn/c">
                <div class="single-card">
                    <img src="img/clang.png" alt="" class="card-img">
                    <h3>C</h3>
                </div>
            </a>
            <a href="/learn/cpp">
                <div class="single-card">
                    <img src="img/cpp.png" alt="" class="card-img">
                    <h3>C++</h3>
                </div>
            </a>
            <a href="/learn/cs">
                <div class="single-card">
                    <img src="img/csharp.png" alt="" class="card-img">
                    <h3>C#</h3>
                </div>
            </a>
            <a href="/learn/git">
                <div class="single-card">
                    <img src="img/git.png" alt="" class="card-img">
                    <h3>Git / Github</h3>
                </div>
            </a>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CungCaiCode | Be a Programming Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">

</head>

<body>
    @include('partials.navbar')

    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
    
            <p>By. <a href="/posts?author=" class="text-decoration-none">{{ $post->author->name ??''}}</a></p>
    
            
            <article class="my-3 fs-5">
              {!! $post->body !!}
            </article>
    
            <a href="/forums" class="d-block mt-3">Back to posts</a>
          </div>
        </div>
      </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/homeAnimate.js') }}"></script>
</body>

</html>

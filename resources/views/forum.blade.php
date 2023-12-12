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
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subforums.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">

</head>

<body>
    @include('partials.navbar')

    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8">
            <h1 class="mb-3 mt-5">{{ $post->title }}</h1>
    
            <p>Asked by <a href="" class="text-decoration-none">{{ $post->author->username ?? ''}}</a> </p>
    
            <article class="my-3 fs-5">
              {!! $post->body !!}
            </article>
            <a href="/forums" class="btn btn-primary">Back to forums page</a>
            @if(Auth::user()->id === $post->user_id)
            <form action="/forum/{{ $post->slug }}/delete" method="post" class="d-inline">
              @method("delete")
              @csrf
              <button class="btn btn-danger border-0" onclick="return confirm('Are you sure you want to delete this post?')">
                Delete 
              </button>
            </form>
            <a href="/forum/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            @endif
          </div>
        </div>
        <div class="row justify-content center mb-5">
          <form action="/forum/reply" method="post" class="mb-5">
            @csrf
            <label for="body" class="form-label">Add a reply</label>
            <input type="text" class="form-control mb-3" id="body" name="body" style="height: 250px; border: 1px solid black;" required>
            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
            <button type="submit" class="btn btn-primary">Post</button>
          </form>
          <h1 class="mb-5">Replies</h1>
          <div class="col-md-8">
            @foreach ($replies as $reply)
            <p>Answered by <a href="" class="text-decoration-none">{{ $reply->author->username ?? ''}}</a> at {{ $reply->created_at->toDateString() }}</p>
            <article class="my-3 fs-5 mb-5" style="border-bottom: 1px solid gray">
              {!! $reply->body !!}
            </article>
            @if(Auth::user()->id === $reply->user_id)
            <form action="/forum/reply/{{ $reply->id }}" method="post" class="d-inline">
              @method("delete")
              @csrf
              <button class="btn btn-danger border-0" onclick="return confirm('Are you sure you want to delete this post?')">
                Delete 
              </button>
            </form>
            @endif
            @endforeach
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
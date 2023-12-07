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

    <h1 class="mb-3 text-center">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>


  @if ($posts->count())
    <div class="card mb-3">
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
          <small class="text-muted">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
          </small>
        </p>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="/forums/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

      </div>
    </div>
  
  
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"></div>
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>
                <small class="text-muted">
                  By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->toDateString() }}
                </small>
              </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/forums/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/homeAnimate.js') }}"></script>
</body>

</html>

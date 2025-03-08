<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Posts</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="{{ route('posts.index') }}"><b>CRUD POSTING</b></a>
      <div class="d-flex">
        <a class="btn btn-light btn-sm" href="{{ route('posts.create') }}">➕ Add Post</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
          <div class="card shadow-lg">
            <div class="card-header bg-success text-white">
              <h5 class="card-title mb-0">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text"><strong>Year:</strong> {{ $post->year }}</p>
              <p class="card-text"><strong>Age:</strong> {{ $post->age }}</p>
              <p class="card-text"><strong>Course:</strong> {{ $post->course }}</p>
              <p class="card-text"><strong>Message:</strong> {{ $post->body }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">✏️ Edit</a>
              <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">🗑️ Delete</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</body>
</html> 

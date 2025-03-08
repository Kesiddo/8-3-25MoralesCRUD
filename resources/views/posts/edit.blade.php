<head><!-- Bootstrap CSS (Make sure this is included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Your custom CSS file -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>



<div class="d-flex justify-content-center align-items-center min-vh-100">
  <div class="col-12 col-md-8 col-lg-5">
    <div class="card shadow-lg border-0 rounded-4 p-4">
      <div class="card-body">
        <h3 class="text-center fw-bold text-primary mb-3">
          <span>📝</span> Update Post
        </h3>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="Name" class="form-label fw-semibold">Name</label>
            <input type="text" class="form-control shadow-sm" id="name" name="name"
              value="{{ $post->name }}" placeholder="Enter your name" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="year" class="form-label fw-semibold">Year</label>
              <select class="form-control shadow-sm" id="year" name="year" required>
                <option value="" disabled {{ empty($post->year) ? 'selected' : '' }}>Select Year</option>
                <option value="1st Year" {{ $post->year == '1st Year' ? 'selected' : '' }}>1st Year</option>
                <option value="2nd Year" {{ $post->year == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                <option value="3rd Year" {{ $post->year == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                <option value="4th Year" {{ $post->year == '4th Year' ? 'selected' : '' }}>4th Year</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="age" class="form-label fw-semibold">Age</label>
              <input type="number" class="form-control shadow-sm" id="age" name="age" 
                value="{{ $post->age }}" placeholder="Enter your age" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="course" class="form-label fw-semibold">Course</label>
            <select class="form-control shadow-sm" id="course" name="course" required>
              <option value="" disabled {{ empty($post->course) ? 'selected' : '' }}>Select Course</option>
              <option value="Nursing" {{ $post->course == 'Nursing' ? 'selected' : '' }}>Nursing</option>
              <option value="Pharmacy" {{ $post->course == 'Pharmacy' ? 'selected' : '' }}>Pharmacy</option>
              <option value="Medical Technology" {{ $post->course == 'Medical Technology' ? 'selected' : '' }}>Medical Technology</option>
              <option value="Medicine" {{ $post->course == 'Medicine' ? 'selected' : '' }}>Medicine</option>
              <option value="Information Technology" {{ $post->course == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
              <option value="Theology" {{ $post->course == 'Theology' ? 'selected' : '' }}>Theology</option>
              <option value="Education" {{ $post->course == 'Education' ? 'selected' : '' }}>Education</option>
              <option value="Business Administration" {{ $post->course == 'Business Administration' ? 'selected' : '' }}>Business Administration</option>
              <option value="Psychology" {{ $post->course == 'Psychology' ? 'selected' : '' }}>Psychology</option>
              <option value="Hospitality Management" {{ $post->course == 'Hospitality Management' ? 'selected' : '' }}>Hospitality Management</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="body" class="form-label fw-semibold">Body</label>
            <textarea class="form-control shadow-sm" id="body" name="body" rows="4" 
              placeholder="Write your message here..." required>{{ $post->body }}</textarea>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary fw-semibold shadow">Update Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

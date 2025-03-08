<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Add a Post</title>
</head>
<body>

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
  <div class="form-container">
    <div class="card form-card">
      <div class="card-body text-center">
        <h3 class="text-primary fw-bold mb-4">📝 Add a Post</h3>
        <form action="{{ route('posts.store') }}" method="post" class="text-start">
          @csrf

          <div class="mb-3">
            <label for="title" class="form-label fw-semibold">Name</label>
            <input type="text" class="form-control input-field" id="title" name="title" placeholder="Enter your name" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="year" class="form-label fw-semibold">Year</label>
              <select class="form-select input-field" id="year" name="year" required>
                <option selected disabled>Select Year</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
              </select> 
            </div>

            <div class="col-md-6 mb-3">
              <label for="age" class="form-label fw-semibold">Age</label>
              <input type="number" class="form-control input-field" id="age" name="age" placeholder="Enter your age" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="course" class="form-label fw-semibold">Course</label>
            <select class="form-select input-field" id="course" name="course" required>
              <option selected disabled>Select Course</option>
              <option value="Nursing">Nursing</option>
              <option value="Pharmacy">Pharmacy</option>
              <option value="Medical Technology">Medical Technology</option>
              <option value="Medicine">Medicine</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Theology">Theology</option>
              <option value="Education">Education</option>
              <option value="Business Administration">Business Administration</option>
              <option value="Psychology">Psychology</option>
              <option value="Hospitality Management">Hospitality Management</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="body" class="form-label fw-semibold">Body</label>
            <textarea class="form-control input-field textarea-field" id="body" name="body" rows="4" placeholder="Write your message here..." required></textarea>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary fw-semibold submit-btn">Create Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>

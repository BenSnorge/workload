<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gym</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 ms-5" href="#">Fitness</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-5">
          <a class="navlink" href="#">Classes</a>
          <a class="navlink" href="#">Trainers</a>
          <a href="#" class="navlink">Nutrition</a>
          <a href="#" class="navlink">Membership</a>

        </div>
      </div>
    </div>
  </nav>
  @yield('content')

</body>
<script src="{{ mix('js/app.js') }}"></script>

</html>
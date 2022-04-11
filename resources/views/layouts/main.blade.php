<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gym</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
  
</head>
<body>
  <header class="header">
    <div class="container">
    <div class="header__logo">
      Smith Realty 
    </div>
    <div class="header__menu">
      <a class="header__menu-link header__menu-link--active" href="#">Home</a>
      <a class="header__menu-link" href="#">Listing</a>
      <a class="header__menu-link" href="#">Property</a>
      <a class="header__menu-link" href="#">Pages</a>
    </div>
    <div class="header__account">
      <div class="header__account-link"><i class="fa-solid fa-heart"></i></div>
      <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
    </div>
    </div>
  </header>
  @yield('content')
</body>
</html>
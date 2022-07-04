<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Workload</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h3 class="text-center">Mitarbeiter</h3>
        <div class="row">
          <div class="col align-self-start pt-5">
          {{-- @yield('content') --}}
        </div>
        </div>
        
      </div>
      <div class="col-md-7 text-center">
        <h3 class="ms-5"> Vom {{ $weekStartDate }}</h3> <h3 class="me-5"> Bis {{ $weekEndDate }}</h3>
        {{-- <div class="row">
          <div class="col-md-4">Juli
            <div class="row">
            <div class="col-sm-3">W1</div>
            <div class="col-sm-3">W2</div>
            <div class="col-sm-3">W3</div>
            <div class="col-sm-3">W4</div>
          </div>
          </div>
          <div class="col-md-4">August
            <div class="row">
            <div class="col-sm-3">W1</div>
            <div class="col-sm-3">W2</div>
            <div class="col-sm-3">W3</div>
            <div class="col-sm-3">W4</div>
          </div>
          </div>
          <div class="col-md-4">September
            <div class="row">
            <div class="col-sm-3">W1</div>
            <div class="col-sm-3">W2</div>
            <div class="col-sm-3">W3</div>
            <div class="col-sm-3">W4</div>
          </div>
          </div>
         
        </div> --}}
      </div>
      <div class="col-md-3 text-center">
        <h3>Gesamt</h3>

      </div>
      
    </div>
    @yield('content')
  </div>



</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
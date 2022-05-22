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
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-black min-vh-100">
                <a href="/dashboard" class="d-flex align-items-center pt-5 pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Dashboard</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                            Home Page
                        </div>
                        <li class="collapse ps-4 " id="collapseExample1">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/home-page">Hero Settings</a>
                            <li class="collapse ps-4 " id="collapseExample1">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/card">Card Settings</a>
                            </li>
                            <li class="collapse ps-4 " id="collapseExample1">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/home-content">Content Settings</a></li>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            Classes
                        </div>
                        <li class="collapse ps-4 " id="collapseExample2">
                            <a class="text-decoration-none p-1 text-dark lh-lg" href="/admin/all-classes">All Classes</a>

                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/new-class">New Class</a>
                        </li>
                        <li class="collapse ps-4 " id="collapseExample2">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/classes-settings">Classes Settings</a>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                            Nutrition
                        </div>
                        <li class="collapse ps-4 " id="collapseExample3">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/nutrition">Nutrition Settings</a>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Trainers
                        </div>
                        <li class="collapse ps-4 " id="collapseExample4">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/new-trainer">New Trainer</a>
                        </li>
                        <li class="collapse ps-4 " id="collapseExample4">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/all-trainers">All Trainers</a>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Membership Plans
                        </div>
                        <li class="collapse ps-4 " id="collapseExample5">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/membership-settings">Membership Settings</a>
                        </li>
                        <li class="collapse ps-4 " id="collapseExample5">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/all-plan-one">Benefits Plan One</a>
                        </li>
                        <li class="collapse ps-4 " id="collapseExample5">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/all-plan-two">Benefits Plan Two</a>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Users
                        </div>
                        <li class="collapse ps-4 " id="collapseExample6">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/all-members">All Users</a>
                        </li>
                        <li class="collapse ps-4 " id="collapseExample6">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/add-members">Add User</a>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Social Media
                        </div>
                        <li class="collapse ps-4 " id="collapseExample7">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/social">Social Media Settings</a>
                        </li>
                    </li>
                    <li class="nav-item py-2">
                        <div class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Footer Settings
                        </div>
                        <li class="collapse ps-4 " id="collapseExample8">
                            <a class="text-decoration-none p-1 text-dark lh-lg d-block" href="/admin/footer">Footer Settings</a>
                        </li>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle cursor-pointer" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu text-small cursor-pointer" aria-labelledby="dropdownUser1">
                        <li class="cursor-pointer">
                          <form  method="POST" action="{{ route('logout') }}">
                            @csrf
                          <a class="dropdown-item btn" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}</a></form>
                              </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>

  
  
</body>
<script src="{{ mix('js/app.js') }}"></script>

</html>
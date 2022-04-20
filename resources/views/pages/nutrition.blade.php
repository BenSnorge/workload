@extends('layouts.main')
@section('content')
  <div class="nutrition">
    <div class="nutrition__hero">
      <img class="nutrition__image" src="https://images.unsplash.com/photo-1497888329096-51c27beff665?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80" alt="">
      <h1 class="nutrition__title">Learn About Nutrition</h1>
    </div>
  </div>
  <div class="nutrition bg-light">
  <div class="container ">
    <div class="nutrition__description">
      <div class="row justify-content-md-center">
        <div class="col-lg-8 col-lg-auto d-flex flex-column justify-content-center  align-items-center">
          <div class="nutrition__heading">
            <h1>Why nutrition is so important</h1>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam neque veniam debitis ipsam commodi perspiciatis adipisci fugiat fuga sequi repellat, doloremque deleniti voluptatem voluptates? Explicabo temporibus voluptatum nulla, minima quod eius optio nostrum! Officiis, dolores inventore! Facere dolorem voluptates totam excepturi nam ut? Consectetur, maxime? Quas nihil ipsam obcaecati.</p>
        </div>
      </div>
      
    </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>We offer classes on nutrition</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img src="https://images.unsplash.com/photo-1610348725531-843dff563e2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="col-12" alt="">
          </div>
        </div>
      </div>
      <div class="nutrition__section">
        <div class="row">
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>How is this helping with your goals?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
      </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>A customized meal plan</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1706&q=80" class="col-12" alt="">
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <div class="nutrition__box">
          <img src="https://images.unsplash.com/photo-1494390248081-4e521a5940db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1612&q=80" class="col-12" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nutrition__box d-flex flex-column justify-content-center  align-items-center">
            <h3>Healthy fuel for your body</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem nesciunt odit autem placeat fugiat quaerat enim libero, quo odio dolor nam reprehenderit minima quis natus molestiae doloremque, eius et quisquam.</p>
          </div>
        </div>
      </div>
      <div class="nutrition__description">
      <div class="row justify-content-md-center">
        {{-- <div class="col-lg-8 col-lg-auto d-flex flex-column justify-content-center  align-items-center">
          <div class="nutrition__heading">
            <h1>Track your progess</h1>
          </div>
          <p>You can track your progress in the members dashboard and book classes with your favorite trainers!</p>
        </div> --}}
      </div>
      
    </div>
    </div>
</div>


  @include('components.social-media')
    @include('components.footer')
@endsection
@extends('master.layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Event Management System</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Student, Event, Staff, Registration"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

@if(isset($message))
    <p>{{ $message }}</p>
@else
    <form action="{{ route('registration.check') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="event_id">Event ID:</label>
            <input type="text" name="event_id" id="event_id" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Check Registration</button>
    </form>
@endif


@endsection
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

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Check Registrations</h5>
                        <form action="{{ route('registrations.check') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="student_id">Student ID:</label>
                                <input type="text" name="student_id" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Check</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if (isset($registrations))
        
            <div class="row mt-4">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Registered Events</h5>
                            @if (count($registrations) > 0)
                                <ul class="list-group">
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <td>{{ $registration->event_name }}</td>
                                        <td>{{ $registration->date_event }}</td>
                                        <td>{{ $registration->venue }}</td>
                                    </tr><br>
                                    @endforeach
                                </ul>
                            @else
                                <p>No registrations found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
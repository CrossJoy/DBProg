@extends('master.layout')
@section('content')

<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        List of Event
                                    </h5>
                                </div>

                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Venue</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                        <tr>
                                            <th scope="row">{{ $event->event_id }}</th>
                                            <td>{{ $event->event_name }}</td>
                                            <td>{{ $event->date_event }}</td>
                                            <td>{{ $event->venue }}</td>
                                            <td>
                                            <form action="/events/{{ $event->event_id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="/events/{{ $event->event_id }}/edit">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-primary" href="/add-event">Add</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

@endsection
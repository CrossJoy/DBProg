

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
                                        Edit Event
                                    </h5>
                                </div>
                                <div>
                                <form action="/update-event/{{ $event->event_id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="event_id">Event ID: {{ $event->event_id }}</label>
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="event_name">Name:</label>
                                        <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="date_event">Date:</label>
                                        <input type="date" class="form-control" id="date_event" name="date_event" value="{{ $event->date_event }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="venue">Venue:</label>
                                        <input type="text" class="form-control" id="venue" name="venue" value="{{ $event->venue }}">
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


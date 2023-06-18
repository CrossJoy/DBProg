

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
                                        Edit Registration
                                    </h5>
                                </div>
                                <div>
                                <form action="/update-registration/{{ $registration->reg_id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_id">Registration ID: {{ $registration->reg_id }}</label>
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="event_id">Event ID:</label>
                                        <input type="text" class="form-control" id="event_id" name="event_id" value="{{ $registration->event_id }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_id">Student ID:</label>
                                        <input type="text" class="form-control" id="stud_id" name="stud_id" value="{{ $registration->stud_id }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="reg_date">Date:</label>
                                        <input type="date" class="form-control" id="reg_date" name="reg_date" value="{{ $registration->reg_date }}">
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


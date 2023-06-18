

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
                                        Edit Staff
                                    </h5>
                                </div>
                                <div>
                                <form action="/update-staff/{{ $staff->staff_id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_id">Staff ID: {{ $staff->staff_id }}</label>
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="staff_name">Staff Name:</label>
                                        <input type="text" class="form-control" id="staff_name" name="staff_name" value="{{ $staff->staff_name }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="staff_phone">Phone No:</label>
                                        <input type="text" class="form-control" id="staff_phone" name="staff_phone" value="{{ $staff->staff_phone }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="event_id">Event ID:</label>
                                        <input type="text" class="form-control" id="event_id" name="event_id" value="{{ $staff->event_id }}">
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


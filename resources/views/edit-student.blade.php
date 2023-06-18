

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
                                        Edit Student
                                    </h5>
                                </div>
                                <div>
                                <form action="/update-student/{{ $student->stud_id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_id">Student ID: {{ $student->stud_id }}</label>
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_name">Student Name:</label>
                                        <input type="text" class="form-control" id="stud_name" name="stud_name" value="{{ $student->stud_name }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_kulliyah">Kulliyah:</label>
                                        <input type="text" class="form-control" id="stud_kulliyah" name="stud_kulliyah" value="{{ $student->stud_kulliyah }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="stud_phone">Phone No:</label>
                                        <input type="text" class="form-control" id="stud_phone" name="stud_phone" value="{{ $student->stud_phone }}">
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


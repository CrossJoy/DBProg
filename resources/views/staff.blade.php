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
                                        List of Staff
                                    </h5>
                                </div>

                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone No</th>
                                            <th scope="col">Event ID</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffs as $staff)
                                        <tr>
                                            <th scope="row">{{ $staff->staff_id }}</th>
                                            <td>{{ $staff->staff_name }}</td>
                                            <td>{{ $staff->staff_phone }}</td>
                                            <td>{{ $staff->event_id }}</td>
                                            <td>
                                            <form action="/staffs/{{ $staff->staff_id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="/staffs/{{ $staff->staff_id }}/edit">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-primary" href="/add-staff">Add</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

@endsection
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" class="dropzone" action="{{route('about-me')}}"
                  enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Work</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="work" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Degree</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="degree" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-url-input" class="col-md-2 col-form-label">Website</label>
                        <div class="col-md-10">
                            <input class="form-control" name="website" type="url" value="https://getbootstrap.com" id="example-url-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="email" value="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                            <input class="form-control" name="phone" type="text" id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Age</label>
                        <div class="col-md-10">
                            <input class="form-control" name="age" type="number" value="18" id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Birthday</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Freelance</label>
                        <div class="col-md-10">
                            <select name="freelance" class="form-select">
                                <option>Available</option>
                                <option>Not Available</option>
                            </select>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="fallback">
                                <input name="image" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save About</button>
                    </div>
                </div>
            </div>
            </form>
        </div> <!-- end col -->
    </div>



@endsection

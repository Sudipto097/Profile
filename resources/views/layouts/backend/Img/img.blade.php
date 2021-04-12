@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <form method="post" class="dropzone" action="{{route('image-upload')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" required placeholder="Type something"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Work</label>
                    <input type="text" class="form-control" name="work" required placeholder="Type something"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Small letter</label>
                    <input type="text" class="form-control" name="small_letter" required placeholder="Type something"/>
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
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Send Files</button>
                </div>
            </form>
        </div> <!-- end col -->
    </div>


@endsection

@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Hero</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>work</th>
                            <th>degree</th>
                            <th>website</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>age</th>
                            <th>date</th>
                            <th>freelance</th>
                            <th>freelance</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $number = 0; ?>
                        @foreach($about_me as $v_img)
                            <tr>
                                <td>{{$number+1}}</td>
                                <?php $number++; ?>
                                <td>{{$v_img->work}}</td>
                                <td>{{$v_img->degree}}</td>
                                <td>{{$v_img->website}}</td>
                                <td>{{$v_img->email}}</td>
                                <td>{{$v_img->phone}}</td>
                                <td>{{$v_img->age}}</td>
                                <td>{{$v_img->date}}</td>
                                <td>{{$v_img->freelance}}</td>
                                <td><img src="{{URL::to($v_img->image)}}" style="width:100px; height: 100px;"></td>
                                <td>
                                    <?php if($v_img->status == '1'){ ?>
                                    <a href="{{url('/status-update-about',$v_img->id)}}" class="btn btn-success">Active</a> ||
                                    <?php }else{ ?>
                                    <a href="{{url('/status-update-about',$v_img->id)}}" class="btn btn-danger">Inactive</a> ||
                                    <?php } ?>
                                    <a href="Delete-about/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>


@endsection

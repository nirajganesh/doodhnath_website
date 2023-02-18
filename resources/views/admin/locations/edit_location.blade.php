@extends('layouts.app')
@section('title')
  Location Section
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Page Location</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="pr-3"> <a href="/location/view-location"><button type="button" class="btn btn-info">View Location</button></a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home Page Location</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            @if(Session::has('success'))
               <div class="bg-success"><p>{{Session::get('success')}}</p></div>
            @endif 
            @if(Session::has('error'))
                <div class="bg-danger"><p>{{Session::get('error')}}</p></div>
            @endif 
            
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Location</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form action="/location/update-location/{{$location->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="location_name" value="{{$location->location_name}}" placeholder="Enter location name">
                  </div>
                  @if(@$errors->has('location_name'))
                     <div class="bg-danger"><p>{{$errors->first('location_name')}}</p></div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">Service Time</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" name="service_time"  placeholder="Enter location time">{{$location->service_time}}</textarea>
                  </div>
                  @if(@$errors->has('service_time'))
                    <div class="bg-danger"><p>{{$errors->first('service_time')}}</p></div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">Margin</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" name="margin"  placeholder="Enter margin">{{$location->margin}}</textarea>
                  </div>
                  @if(@$errors->has('margin'))
                    <div class="bg-danger"><p>{{$errors->first('margin')}}</p></div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" name="quantity"  placeholder="Enter quantity">{{$location->quantity}}</textarea>
                  </div>
                  @if(@$errors->has('quantity'))
                    <div class="bg-danger"><p>{{$errors->first('quantity')}}</p></div>
                  @endif
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection

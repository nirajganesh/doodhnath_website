@extends('layouts.app')
@section('title')
  Product Section
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Page Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="pr-3"> <a href="/product/view-product"><button type="button" class="btn btn-info">View Product</button></a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home Page Product</li>
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
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form action="/product/update-product/{{$product->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">product Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" value="{{$product->heading}}" placeholder="Enter product heading">
                  </div>
                  @if(@$errors->has('heading'))
                     <div class="bg-danger"><p>{{$errors->first('heading')}}</p></div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">product Content</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" name="content"  placeholder="Enter product content">{{$product->content}}</textarea>
                  </div>
                  @if(@$errors->has('content'))
                    <div class="bg-danger"><p>{{$errors->first('content')}}</p></div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">product Image</label>
                    <input type="file" class="form-control p-1" id="exampleInputEmail1" name="product_image" placeholder="Enter product image">
                    <label for="exampleInputEmail1">{{$product->product_image}}</label>  
                 </div>
                  @if(@$errors->has('product_image'))
                     <div class="bg-danger"><p>{{$errors->first('product_image')}}</p></div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product discount</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" name="discount" placeholder="Enter Product discount">{{$product->discount}}</textarea>
                  </div>
                  @if(@$errors->has('discount'))
                    <div class="bg-danger"><p>{{$errors->first('discount')}}</p></div>
                  @endif
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1" {{$product->is_active==1?'checked':''}}>
                    <label class="form-check-label" for="exampleCheck1">Status</label>
                  </div>
                  @if(@$errors->has('status'))
                    <div class="bg-danger"><p>{{$errors->first('status')}}</p></div>
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

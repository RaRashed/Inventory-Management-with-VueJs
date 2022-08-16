@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>





    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <h4 class="text-center">Brand list</h4>
                <hr>
                <a href="{{ route('brands.create') }}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>ADD Brand</a>
              <div class="card">



<table class="table table-boardered datatable">
    <thead>
        <tr>
            <th>#SL</th>
            <th>Brand Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

            @if($brands)

            @foreach ($brands as $key => $brand)
            <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $brand->name  ?? ' ' }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('brands.edit',$brand->id) }}"><i class="fa fa-edit"></i></a>
                <a class="btn btn-success btn-sm" href="{{ route('brands.show',$brand->id) }}"><i class="fa fa-eye"></i></a>
                <a onclick="return confirm('are you sure?')" href="/brands/{{$brand->id}}/delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
            </tr>

            @endforeach
            @endif


    </tbody>
</table>
              </div>


            </div>
            <!-- /.col-md-6 -->
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

@endsection

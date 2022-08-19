@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products List</li>
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
                <h4 class="text-center">Product list</h4>
                <hr>
                <a href="{{ route('products.create') }}"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>ADD Product</a>
              <div class="card">



<table class="table table-boardered datatable">
    <thead>
        <tr>
            <th>#SL</th>
            <th>Product Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

            @if($products)

            @foreach ($products as $key => $product)
            <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $product->name  ?? ' ' }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i></a>
                <a class="btn btn-success btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i></a>
                <a onclick="return confirm('are you sure?')" href="/products/{{$product->id}}/delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

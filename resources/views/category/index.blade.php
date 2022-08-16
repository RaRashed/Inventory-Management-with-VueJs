@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category List</li>
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
                <h4 class="text-center">Category list</h4>
                <hr>
              <div class="card">



<table class="table table-boardered datatable">
    <thead>
        <tr>
            <th>#SL</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

            @if($categories)

            @foreach ($categories as $key => $category)
            <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $category->name  ?? ' ' }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-edit"></i></a>
                <a class="btn btn-success btn-sm" href="{{ route('categories.show',$category->id) }}"><i class="fa fa-eye"></i></a>
                <a onclick="return confirm('are you sure?')" href="/categories/{{$category->id}}/delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

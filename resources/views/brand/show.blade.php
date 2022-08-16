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
              <li class="breadcrumb-item active">Brand Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>




    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">

                <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"> Brand</h5>
 <hr>

<table class="table table-boardered ">
    <tr>
        <th>Brand name</th>
        <td>{{ $brand->name }}</td>
    </tr>

</table>
              </div>
                </div>
            </div>


            </div>
            <!-- /.col-md-6 -->
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->


@endsection


@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sizes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Size Create</li>
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
                <h5 class="card-title"> Size Edit</h5>


                <form class="form mt-3" action="{{ route('sizes.update',$size->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                      <div class="form-group">
                        <label for="name">Size Name</label>
                        <input type="text" class="form-control" name="size" value="{{ $size->size}}">
                      </div>



                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
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


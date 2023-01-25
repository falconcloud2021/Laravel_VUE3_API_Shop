@extends('layouts.dashboard')
@section('title', 'Category Edit form')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">  
        <!-- category edit-form -->
        <div class="card">
          <div class="card card-info">
            <div class="card-header">
              <h5><i>Category edit form</i></h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST">
                @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="EditName">Category name</label>
                <input type="text" class="form-control" name="title" value="{{ $category->title }}">
              </div>
              <div class="form-group">
                <label for="InputCategory">SubCategory name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label for="InputDescription">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $category->description }}">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="InputFile">
                      <label class="custom-file-label" for="InputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
              </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Submit</button>
            </div>
            </form>
            </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
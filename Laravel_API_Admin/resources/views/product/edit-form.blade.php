@extends('layouts.dashboard')

@section('title', 'Product edit-form')

@section('content')

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h4><i>Product edit form</i></h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputName">Product name</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Enter product name">
                  </div>
                  <div class="form-group">
                    <label for="InputCategory">Category name</label>
                    <input type="text" class="form-control" id="category" placeholder="Select category name">
                  </div>
                  <div class="form-group">
                    <label for="InputDescription">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Description">
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
                  <button type="submit" class="btn btn-success">+ Edit product</button>
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


@endsection
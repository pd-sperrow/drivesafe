@extends('admin.layouts.admin_format')

@section('title', '| create new reporter')

@section('navhead', 'Add reporter')

@section('content')
	<!-- Start content -->			
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD NEW REPORTER</h4>
                </div>
                <div class="card-body">
                  <form action="{{ Route('admin.create_reporter.store') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Reporter Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Reporter Position</label>
                          <input type="text" class="form-control" name="position">
                        </div>
                      </div>
                      
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Reporter Email</label>
                          <input type="email" class="form-control" value="{{ old('email') }}" name="email" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Re-Enter Password</label>
                          <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                      </div>

                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">ADD REPORTER</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
      </div>
      <!--==============add modal=====================-->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">change your profile pictue</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      
      <!--==============close modal================-->
    <!-- close content-->
@endsection

@section('scripts')
@endsection
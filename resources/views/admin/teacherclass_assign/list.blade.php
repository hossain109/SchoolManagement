@extends('layout.app')

@section('content')

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            {{-- <h3 class="m-2">Class List(<small>Total:{{ App\Models\Subject_assign_class::count() }}</small>)</h3> --}}
          </div>
          <div class="col-md-6 text-right">
            <a href="{{url('admin/teacher-class/add')}}" class="btn btn-primary m-2">Assign Teacher Class</a>
          </div>
        </div>
        @include('flush.message')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Class List</h5>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Class Name</th>
                      <th>Teacher Name</th>
                      <th>Status</th>
                      <th>Created By</th>
                      <th>Created Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
            {{-- {{ $subclasses->links() }} --}}
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
  </section>

@endsection
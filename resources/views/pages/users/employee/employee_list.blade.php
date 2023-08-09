@extends('index')
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Employee List</h5>

            </div>
            <form action="{{route('EmployeeList.create')}}">
                <button class="btn btn-primary">Add Employee</button>
            </form>
            <div class="card-body">
                <div class="table-responsive">
         
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                              @foreach ($empolyee as $empolyee )
                              <td>{{$employee->name}}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>
                                  <form action="">
                                      <button class="btn btn-sm btn-outline-light">Edit</button>
                                      <button class="btn btn-sm btn-outline-light">
                                          <i class="far fa-trash-alt"></i>
                                      </button>
                                  </form>
                              </td> 
                              @endforeach
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end data table  -->
    <!-- ============================================================== -->
@stop

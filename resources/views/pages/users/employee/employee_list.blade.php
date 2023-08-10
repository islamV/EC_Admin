@extends('index')
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Employee List</h5>

            </div>
            <div>
                <a href="EmployeeList/create" class="btn btn-rounded btn-primary">Add Employee</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Salary</th>
                                <th>Start date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($employees as $employee)
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->role }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->office }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->created_at }}</td>
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

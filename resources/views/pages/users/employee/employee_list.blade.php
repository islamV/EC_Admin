@extends('index')
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Employee List</h5>

            </div>
            <div>
                <a href="{{ route('EmployeeList.create') }}" class="btn btn-rounded btn-primary">Add Employee</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
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
                            @foreach ($employees as $employee)
                                <tr>
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
                                        <a href="{{route('EmployeeList.show',['EmployeeList'=>$employee->id])}}" class="btn btn-sm btn-outline-primary">View</a>
                                        <form action="">
                                            <button class="btn btn-sm btn-outline-dark"type="submit"
                                                name="edit">Edit</button>
                                        </form>
                                        <form action="">
                                            <button class="btn btn-sm btn-outline-danger"type="submit" name='trash'> <i
                                                    class="far fa-trash-alt"></i>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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

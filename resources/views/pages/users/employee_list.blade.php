@extends('index')
@section('content')

    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">Employee List</h5>

            </div>
            <div class="model">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add New Employee
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name"
                                            aria-describedby="emailHelp" value="" name="name"
                                            placeholder="name of product" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Price</label>
                                        <input type="price" class="form-control" id="price" name="price"
                                            value="" placeholder="price of product" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount"
                                            value="" placeholder="amount of product" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
                                <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <td>Islam Abdelkarim</td>
                                <td>chief executive officer (CEO)</td>
                                <td>Egypt</td>
                                <td><span class="label label-sm label-danger">Admin</span></td>
                                <td>dx@islam1.cf</td>
                                <td>(+20)1014132962</td>
                                <td>20</td>
                                <td>28/7/2022</td>
                                <td>$300,000</td>
                                <td>
                                    <form action="">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
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

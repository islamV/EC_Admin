@extends('index')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Add new employee</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('EmployeeList.store')}}">
                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Full Name</label>
                            <input id="inputText1" type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Phone Number </label>
                            <input id="inputText2" type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Position</label>
                            <input id="inputText3" type="text" class="form-control" name="position">
                        </div>
                        <div class="form-group">
                            <label for="inputText5" class="col-form-label">Office</label>
                            <input id="inputText5" type="text" class="form-control" name="office">
                        </div>
                        <div class="form-group">
                            <label for="input-select">Access role </label>
                            <select class="form-control" id="input-select" name="role">
                                <option>Admin</option>
                                <option>Manger</option>
                                <option>team leader </option>
                                <option>junior</option>
                                <option>senior</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">age </label>
                            <input id="inputText3" type="number" class="form-control" name="number">
                        </div>

                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Start date </label>
                            <input id="inputText3" type="date" class="form-control" name="Start">
                        </div>
                        <label for="inputText3" class="col-form-label">Salary </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                            <input type="text"name="salary" class="form-control">
                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop

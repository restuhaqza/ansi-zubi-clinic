@extends('patient.index')
@section('content')
<div class="container-fluid">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Profile</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtIdNumber" class="col-sm-2 col-form-label">Identity Card</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtIdNumber" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtFullName" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtFullName" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtBirthDate" class="col-sm-2 col-form-label">Birth Date</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtBirthDate" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                        <label for="txtAddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtAddress" placeholder="">
                        </div>
                    </div>
            </form>
        </div>
    </div>

</div>
@endsection

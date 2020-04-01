@extends('nyanumba.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Add a new Student</h4>

                </div>
                <div class="card-body">
                    <form action="{{ route('storeStudent') }} " method="POST" >
                        @csrf
                        <div class="form-group">
                          <label for="Name">Full Name</label>
                          <input type="text" class="form-control" name="full_name">
                          <small class="form-text text-muted">Please enter your full Name</small>
                        </div>
                        <div class="form-group">
                          <label for="dob">Date of Birth</label>
                          <input type="date" class="form-control" name="date_of_birth">
                          <small class="form-text text-muted">Please enter your Date of Birth</small>
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <textarea name="address" id="" class="form-control"></textarea>
                          <small class="form-text text-muted">Please enter your Address</small>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-md btn-primary">
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

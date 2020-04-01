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
                    <form action="{{ route('storePayment') }} " method="POST" >
                        @csrf
                        <div class="form-group">
                          <label for="Name">Student Name</label>
                          <select name="student_number" class="form-control">
                              <option selected disabled>Select Your Student</option>
                              @foreach ($students as $student)
                              <option value=" {{ $student->student_number }} "> {{ $student->full_name }} </option>
                              @endforeach
                          </select>
                          <small class="form-text text-muted">Please select your Student</small>
                        </div>
                        <div class="form-group">
                          <label for="date_of_payment">Date of Payment</label>
                          <input type="date" class="form-control" name="date_of_payment">
                          <small class="form-text text-muted">Please enter your Date of Payment</small>
                        </div>
                        <div class="form-group">
                          <label for="amount">Amount</label>
                          <input type="text" name="amount" class="form-control">
                          <small class="form-text text-muted">Please enter your Amount</small>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-md btn-primary">
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

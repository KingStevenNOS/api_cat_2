@extends('nyanumba.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Welcome</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <a href="/student" class="btn btn-md btn-primary">Add a new Student</a>
                        </div>
                        <div class="col-6">
                          <a href="/fees" class="btn btn-md btn-secondary">Add a new fee payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Recent Fee Payments</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Date of Payment</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fees as $item)
                            <tr>

                                    <td> {{ $item->students->full_name }} </td>
                                    <td> {{ $item->date_of_payment }} </td>
                                    <td> {{ $item->amount }} </td>


                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

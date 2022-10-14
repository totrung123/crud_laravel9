@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header">Student Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->adress }}</p>
            <p class="card-text">Mobile : {{ $students->mobie }}</p>

        </div>
    </div>
</div>

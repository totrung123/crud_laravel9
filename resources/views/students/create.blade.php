@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Student Page</div>
        <div class="card-body">

            <form action="{{ url('student/') }}"method='post'>
                {!! csrf_field() !!}
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Address</label><br>
                <input type="text" name="adress" id="adress" class="form-control"><br>
                <label>Mobile</label><br>
                <input type="text" name="mobie" id="mobie" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>

            </form>
        </div>

    </div>
@stop

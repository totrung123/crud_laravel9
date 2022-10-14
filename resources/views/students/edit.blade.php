@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form method='post' action="{{ url('/student' . '/' . $students->id) }}">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id">
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"><br>
                <label>Address</label><br>
                <input type="text" name="adress" id="adress" value="{{ $students->adress }}"
                    class="form-control"><br>
                <label>Mobile</label><br>
                <input type="text" name="mobie" id="mobie" value="{{ $students->mobie }}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>

            </form>
        </div>

    </div>
@stop

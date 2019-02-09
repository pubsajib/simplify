@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    <form action="{{ url('contact') }}" method="post">
        @method('post')
        @csrf
        <div class="form-group {{ $class }}">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $name }}">
        </div>
        <div class="form-group {{ $class }}">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $email }}">
        </div>
        <div class="form-group">
            <label for="msg">Message</label>
            <textarea name="msg" class="form-control" id="msg" cols="30" rows="10" placeholder="Enter message"></textarea>
        </div>
        <div>
          <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </div>
    </form>
    <br><br>
@endsection

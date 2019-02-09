@extends('layouts.app')
@section('content')
    <h1>Messages</h1>
    @if ($messages)
    	<ol>
    		@foreach ($messages as $message)
    			<li>{{ $message->name }} <br> {{ $message->email }} <br> {{ $message->message }} <br><br> </li>
    		@endforeach
    	</ol>
    @else
 		<h3 class="text-danger text-center">No message found</h3>
    @endif
    <br><br>
@endsection
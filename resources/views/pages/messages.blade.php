@extends('layouts.header')
@section('title','message')
@section('content')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form method="POST" class="container grid grid-cols-1 p-4" action="{{route('message.store')}}">
    @csrf

        <input type="hidden" name="code" value="{{$code}}">
      <input type="text" class="input-field w-1/2 mb-3" placeholder="phone" name="phone" id="exampleInputEmail1" >

      <textarea placeholder="Write your message"  name="content" cols="30" rows="10" class="input-field"></textarea>

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
    </div>
    <button type="submit" class="btn-submit mt-4">Send</button>
  </form>
@endsection
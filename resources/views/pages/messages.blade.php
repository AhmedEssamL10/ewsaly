@extends('layouts.parent')
@section('content')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form method="POST" action="{{route('message.store')}}">
    @csrf
    <div class="m-3">
    <div class="mb-3">
        <input type="hidden" name="code" value="{{$code}}">
      <label for="exampleInputEmail1" class="form-label">Phone Number</label>
      <input type="text" class="form-control" name="phone" id="exampleInputEmail1" >
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Message</label>
      <input type="text" class="form-control" name="content" id="exampleInputEmail1" >
    </div>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
    </div>
    <button type="submit" class="btn btn-primary m-3">Send</button>
</div>
  </form>
@endsection
@extends('layouts.parent')
@section('content')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

{{-- <form method="GET" action="{{route('code.check')}}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Code</label>
      <input type="text" class="form-control" name="code" id="exampleInputEmail1" aria-describedby="emailHelp">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection --}}
aaaa
@extends('layouts.parent')
@section('content')
<form method="GET" action="{{ route('code.store') }}">
  @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

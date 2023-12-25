@extends('layouts.parent')
@section('content')
    <form method="POST" action="{{route('register')}}">
        <div class="m-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-danger">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mb-3">
                <input type="hidden" class="form-control" name="code" value="{{ $code }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Car Model</label>
                <input type="text" class="form-control" name="car_model" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Car Color</label>
                <input type="text" class="form-control" name="car_color" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Plate Number</label>
                <input type="text" class="form-control" name="plate_number" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

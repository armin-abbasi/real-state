@extends('base')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ url('auth/login') }}">
        {!! csrf_field() !!}
        <div class="form-group col-md-6 offset-md-2">
            <br><br>
            <h3>Login to Real-State</h3>
            <br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
            </div>
            <br>
            <div class="input-group">
                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
            <br><br>
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
    </form>
@endsection

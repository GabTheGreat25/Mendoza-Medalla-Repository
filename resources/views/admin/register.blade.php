<body style="background-image: url(/navbar/bg.png); background-size:cover;"></body>
@extends('layouts.master')
@section('content')
<style>
    .container {
        background-color: rgba(173, 128, 79, 0.753);
        width: 100rem;
        height: 71.5rem;
        padding: 1rem 3rem;
        border-radius: .75rem;
    }
</style>
<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Admin Register</h1>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            {{-- <form action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data"> --}}
                <form class="" action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    {{-- <div class="form-group">
                        <label for="username">Username: </label><i style="color:red">*</i>
                        <input type="text" name="username" id="username" class="form-control">
                    </div> --}}

                    <div class="form-group">
                        <label for="email">Email: </label><i style="color:red">*</i>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label><i style="color:red">*</i>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Name: </label><i style="color:red">*</i>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="job" class="control-label">{{ __('job') }}</label><i style="color:red">*</i>
                        <div class="form-group">
                            <select class="form-control" name="job" value="{{ old('job') }}">
                                @if ($errors->has('job'))
                                <small>{{ $errors->first('job') }}</small>>
                                @endif
                                <option value="Super Admin">Super Admin</option>
                                <option value="Security">Security</option>
                                <option value="IT">IT</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Address: </label><i style="color:red">*</i>
                        <input type="text" name="address" id="address" class="form-control">
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phonenumber">Phone number: </label><i style="color:red">*</i>
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                        @error('phonenumber')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="img_path" class="control-label">Admin Profile:</label><i style="color:red"></i>
                        <input type="file" class="form-control" id="img_path" name="img_path">
                        @error('img_path')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" value="Sign Up" class="btn btn-primary">
                </form>
        </div>
    </div>
</div>
@endsection
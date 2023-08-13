@extends('layouts.base')
@section('login')
    <div class="page-login" style="width: 500px; margin-left: 280px; margin-top: 10px">
        <div class="name-form">
            <h3 style="text-align: center">Đăng nhập</h3>
        </div>
        <div class="form-login">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                           placeholder="Nhập email" name="email"
                           value="{{ old('email') }}">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                           name="password"
                           value="{{ old('password') }}"
                           placeholder="Nhập mật khẩu">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
@endsection


<div class="name-form">
    <h3 style="text-align: center">Đăng ký tài khoản viết bài</h3>
</div>
<div class="form-register">
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Họ và tên:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nhập tên"
                   name="name"
                   value="{{ old('name') }}">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                   value="{{ old('email') }}"
                   placeholder="Nhập email" name="email">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                   placeholder="Nhập mật khẩu" name="password">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
        </div>
    </form>
</div>

<div class="register-to-view mt-5">
    <div class="name-form-register-to-view">
        <h2 style="text-align: center">Đăng ký xem bài viết mới</h2>
    </div>
    <form style="padding: 20px; margin-left: 200px" action="{{route('register-see-new-post')}}" method="post">
        @csrf
        <div class="row">
            <div class="form-group mb-2 col-6">
                <label for="emailInput" class="sr-only">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror mr-2"
                       value="{{ old('email') }}" name="email" id="emailInput" placeholder="Email">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-5">
                <button type="submit" class="btn btn-primary mb-2" style="width: 300px">Đăng ký</button>
            </div>
        </div>
    </form>
</div>

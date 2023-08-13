<!-- Header sử dụng Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Giải pháp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tin tức & Sự kiện</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cơ hội nghề nghiệp</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('show-form-create-post')}}">Đăng bài</a>
            </li>

            <li class="nav-item">
                @if(is_null(auth()->user()))
                    <a class="nav-link" href="{{route('show-form-login')}}">Đăng nhập</a>
                @else
                    <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                @endif

            </li>
        </ul>
    </div>
</nav>

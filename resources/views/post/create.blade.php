@extends('layouts.base')
@section('create-post')
    <div class="create-post" style="width: 500px; margin-left: 280px; margin-top: 10px">
        <div class="name-form">
            <h3 style="text-align: center">Viết bài mới</h3>
        </div>
        <div class="form-create-post">
            <form action="{{route('create-post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Tiêu đề:</label>
                    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                           placeholder="Nhập tiêu đề" name="title"
                           value="{{ old('title') }}">
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Ảnh đại diện:</label>
                    <input type="file" class="form-control  @error('image') is-invalid @enderror" id="image"
                           placeholder="Nhập tiêu đề" name="image"
                           value="{{ old('title') }}">
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example" name="category_id"
                            style="width:500px; height: 40px">
                        <option selected>Chọn danh mục</option>
                        <option value="1">Giải pháp</option>
                        <option value="2">Tin tức</option>
                    </select>
                    @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Nội dung:</label>
                    <textarea id="w3review" name="content" rows="4" cols="58">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-100">Xuất bản bài viết</button>
                </div>
            </form>
        </div>
    </div>
@endsection


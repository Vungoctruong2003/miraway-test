<div class="new-post row mt-5">
    <div class="col-8">
        <div class="category-name">
            <h1>Bài viết mới nhất</h1>
        </div>

        @foreach($newPosts as $post)
            <div class="list-post mt-4">
                <div class="featured-post-1 row">
                    <div class="featured-post-image col-5">
                        <img src="{{ asset($post->image) }}" alt="Ảnh bài viết" width="277" height="217">
                    </div>
                    <div class="featured-post col-7">
                        <div class="featured-post-title">
                            <p class="title-post">{{strtoupper($post->title)}}</p>
                        </div>
                        <div class="featured-post-content">
                            <p class="content-post">{{$post->content}}</p>
                        </div>
                        <div class="featured-post-content text-read-more">
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="col-4">
        <div class="see-more mb-7">
            <img src="{{ asset('images/Frame 984.png') }}" alt="Xem thêm">
        </div>
        <div class="tag">
            <img src="{{ asset('images/Frame 992.png') }}" alt="Tag">
        </div>
    </div>
</div>

<?php

namespace App\Http\Controllers;

use App\Events\SendEmailEvent;
use App\Http\Requests\CreatePostRequest;
use App\Jobs\SendEmailJob;
use App\Models\Post;
use App\Models\UserSeeNewPosts;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\String\s;

class PostController extends Controller
{
    public function create(
        CreatePostRequest $request,
    )
    {
        $image = $request->file('image');
        $storedPath = $image->move('images', $image->getClientOriginalName());

        $dataCreatePost = $request->all();
        $dataCreatePost['image'] = $storedPath->getPathname();

        Post::create($dataCreatePost);
        Session::flash('successCreatePost', 'Tạo mới bài viết thành công');
        $userSendMailNewPosts = UserSeeNewPosts::all()->pluck('email')->toArray();
        SendEmailJob::dispatch($userSendMailNewPosts);
        return redirect()->route('home');
    }

    public function show()
    {
        return view('post.create');
    }

    public function getNewPosts()
    {
        $newPosts = Post::orderByDesc('created_at')->limit(4)->get();
        return view('index', compact('newPosts'));
    }
}

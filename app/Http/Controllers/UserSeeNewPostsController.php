<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterSeeNewPostRequest;
use App\Models\UserSeeNewPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserSeeNewPostsController extends Controller
{
    public function create(
        RegisterSeeNewPostRequest $request,
    )
    {
        UserSeeNewPosts::create($request->all());
        Session::flash('successRegisterSeeNewPost', 'Đăng kí xem bài viết mới thành công');
        return redirect()->route('home');
    }
}

@extends('layouts.base')
@section('home')
    @include('layouts.header')

    @if (Session::has('successLogin'))
        <div class="alert alert-info">{{ Session::get('successLogin') }}</div>
    @endif

    @if (Session::has('errorLogin'))
        <div class="alert alert-error">{{ Session::get('errorLogin') }}</div>
    @endif

    @if (Session::has('successCreatePost'))
        <div class="alert alert-info">{{ Session::get('successCreatePost') }}</div>
    @endif

    @if (Session::has('successRegisterSeeNewPost'))
        <div class="alert alert-info">{{ Session::get('successRegisterSeeNewPost') }}</div>
    @endif

    @if (Session::has('noVerify'))
        <div class="alert alert-info">{{ Session::get('noVerify') }}</div>
    @endif

    @if (Session::has('successCreateNotVerify'))
        <div class="alert alert-info">{{ Session::get('successCreateNotVerify') }}</div>
    @endif

    @if (Session::has('errorVerifyAccount'))
        <div class="alert alert-info">{{ Session::get('errorVerifyAccount') }}</div>
    @endif

    <div class="content mt-5">
        @include('top-content')

        @include('contact-social')

        @include('featured-posts')

        @include('new-posts')

        @include('register-to-view-new-post')
    </div>
    @include('layouts.footer')
@endsection

@extends('layouts.head')
@section('title')
    Trang chủ
@endsection
@extends('layouts.default')
@section('content')

    <video id="home_video"  controls>
        <source src="{{ asset('/video/cyb_video.mp4') }}" type="video/mp4">
        <source src="{{ asset('/video/cyb_video.ogg') }}" type="video/ogg">
        Your browser does not support the video tag.
    </video>
@endsection

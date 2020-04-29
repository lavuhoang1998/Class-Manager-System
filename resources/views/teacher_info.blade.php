@extends('layouts.head')
@section('title')
    Thông tin giáo viên
@endsection
@extends('layouts.default')
@section('content')
    @foreach($teachers as $teacher)
        <div class="container">
            <div class="card-title">
                <h1>Thông tin cá nhân</h1>
                <hr  width="90%" size="1px" align="center" color="black" />
            </div>
            <div class="modal-title">
                <h4>Thông tin giáo viên</h4>
            </div>
            <hr  width="60%" size="10px"  align="center" color="orange" />
            <div class="row">
                <div class="col-3" id="avatar">
                    <img src="{{ asset($teacher->avatar)}}" width="200" height="300"><br>
                    <span>MSGV:{{$teacher->id}}</span>
                </div>
                <div class="col">
                    <ul class="w3-ul">
                        <li>
                            <span class="title">Họ và tên:</span>
                            <span class="value">{{$teacher->name}}</span>
                        </li>
                        <li><span class="title">Chủ nhiệm lớp:</span>
                            <span class="value">{{$class->name}}</span>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="w3-ul">
                        <li>
                            <span class="title">Ngày sinh:</span>
                            <span class="value">{{$teacher->date_of_birth}}</span>
                        </li>
                        <li><span class="title">Email:</span>
                            <span class="value">{{$teacher->email}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-title">
                <br><br>
                <h4>About me</h4>
            </div>
            <hr  width="60%" size="10px"  align="center" color="orange" />

            <div class="container" id="about_me">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" id="aboutme" readonly="readonly" rows="5">{{$teacher->about_me}}</textarea>
                    </div>
                </form>
            </div>

        </div>
    @endforeach

@endsection

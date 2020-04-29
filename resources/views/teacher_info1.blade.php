@extends('layouts.head')
@section('title')
    Thông tin giáo viên
@endsection
@extends('layouts.default')
@section('content')
    <div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form class="card card-sm", action="{{ route('postTeacherID') }}" method="POST">
                    @csrf
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" name="MSGV" placeholder="Nhập mã số giáo viên">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-lg btn-secondary" type="submit">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

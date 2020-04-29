@extends('layouts.head')
@section('title')
    Thông tin lớp
@endsection
@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="card-title">
            <h1>Thông tin lớp</h1>
            <hr  width="90%" size="1px" align="center" color="black" />
        </div>

        <div class="row" id="select">
            <div class="row col">
                <div class="col" id="grade"><h4>Khối</h4></div>
                <div class="col-3 btn-group">
                    <button class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton" data-toggle="dropdown">
                        Chọn khối
                    </button>


                    <div class="dropdown-menu">
                        @foreach($data as $grade)
                        <a class="dropdown-item" href="/class_info/{{$grade}}">{{$grade}} </a>
                        @endforeach
                    </div>


                </div>
            </div>

            <div class="row col">
                <div class="col-2" id="class"><h4>Lớp</h4></div>
                <div class="col-2 btn-group">
                    <button class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton" data-toggle="dropdown">
                        Chọn lớp
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Javascript</a>
                        <a class="dropdown-item" href="#">Css</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Bootstrap</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
@endsection

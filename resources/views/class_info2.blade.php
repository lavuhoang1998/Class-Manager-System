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
                        {{$data}}
                    </button>

                    <div class="dropdown-menu">
                        @foreach($data2 as $grade)
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
                        {{$data1}}
                    </button>
                    <div class="dropdown-menu">
                        @foreach($data3 as $class)
                            <a class="dropdown-item" href="/class_info/{{$data}}/{{$class}}">{{$class}}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

        <div>
            <table>
                <tr>
                    <th>Mã số học sinh</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Email</th>
                </tr>
                @foreach($students as $student)
                    <tr>
                        <td><a href="/student_info/mshs={{$student->id}}">{{$student->id}}</a></td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->date_of_birth}}</td>
                        <td>{{$student->email}}</td>
                    </tr>
                @endforeach

            </table>

            <div>
                <ul class="w3-ul">
                    <li>
                        <span class="title">Tổng số học sinh:</span>
                        <span class="value">{{$count}}</span>
                    </li>
                    <li><span class="title">Giáo viên chủ nhiệm:</span>
                        <span class="value">{{$teacher->name}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
@endsection

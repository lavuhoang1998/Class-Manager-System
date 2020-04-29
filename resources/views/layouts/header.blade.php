<header>
    <div class="header-container">
        <div class="row" id="logo_name">
            <div class="col-3" id="logo">
                <img src="{{ asset('/img/logo1.jpg') }}" width="620" height="180">
            </div>
        </div>
        <div class="menu-bar">
            <ul class="list-group list-group-horizontal">
                <li class="menu-bar-item"><span><a href="{{url('/')}}">Trang chủ</a></span></li>
                <li class="menu-bar-item"><span><a href="{{url('/class_info')}}">Thông tin lớp</a></span></li>
                <li class="menu-bar-item"><span><a href="{{url('/student_info')}}">Thông tin học sinh</a></span></li>
                <li class="menu-bar-item"><span><a href="{{url('/teacher_info')}}">Thông tin giáo viên</a></span></li>
            </ul>
        </div>
    </div>
</header>

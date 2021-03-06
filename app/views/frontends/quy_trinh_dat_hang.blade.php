@extends(Config::get('layout.frontend'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Quy Trình Đặt Hàng</h4>
                    <p>
                        <div>Bạn có thể đặt hàng <a href=" {{ action('FrontendController@getDatHangInAn') }}" style="color: blue;"> ở đây </a></div>
                        <img src="{{ asset('asset/frontend/img/dat_hang/quy_trinh_dat_hang.png') }}" style="width: 120%;">
                    </p>
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop
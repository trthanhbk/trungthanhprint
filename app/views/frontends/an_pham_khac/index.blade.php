@extends(Config::get('layout.frontend'))

@section('content')

<div class="row">

  <!-- Item #1 -->
  <div class="col-md-4 col-sm-6">
    <!-- Each item should be enclosed in "item" class -->
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('AnPhamKhacController@getPhieuBaoHanh') }}"><img src="{{ url('asset/frontend/img/photos/in_danh_thiep.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <!-- Use the span tag with the class "ico" and icon link (hot, sale, deal, new) -->
        <h5><a href="{{ action('AnPhamKhacController@getPhieuBaoHanh') }}">Phiếu bảo hành</a><span class="ico"><img src="{{ url('asset/frontend/img/hot.png') }}" alt="" /></span></h5>
        <div class="clearfix"></div>        
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button text-right"><a href="{{ action('AnPhamKhacController@getPhieuBaoHanh') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <!-- Item #2 -->
  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('AnPhamKhacController@getThucDon') }}"><img src="{{ url('asset/frontend/img/photos/in_tieu_de_thu.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('AnPhamKhacController@getThucDon') }}">Thực đơn</a></h5>        
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button text-right"><a href="{{ action('AnPhamKhacController@getThucDon') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('AnPhamKhacController@getBieuMau') }}"><img src="{{ url('asset/frontend/img/photos/in_phong_bi.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('AnPhamKhacController@getBieuMau') }}">Biểu mẫu</a><span class="ico"><img src="{{ url('asset/frontend/img/new.png') }}" alt="" /></span></h5>        
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button text-right"><a href="{{ action('AnPhamKhacController@getBieuMau') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('AnPhamKhacController@getTheNhua') }}"><img src="{{ url('asset/frontend/img/photos/in_bia_dung_ho_so.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('AnPhamKhacController@getTheNhua') }}">Thẻ nhựa</a><span class="ico"><img src="{{ url('asset/frontend/img/deal.png') }}" alt="" /></span></h5>        
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button text-right"><a href="{{ action('AnPhamKhacController@getTheNhua') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>  

  <div class="col-md-4 col-sm-6">
    <div class="item">
      <!-- Item image -->
      <div class="item-image">
        <a href="{{ action('AnPhamKhacController@getVeGiuXe') }}"><img src="{{ url('asset/frontend/img/photos/in_bia_dung_ho_so.jpg') }}" alt="" class="img-responsive" /></a>
      </div>
      <!-- Item details -->
      <div class="item-details">
        <!-- Name -->
        <h5><a href="{{ action('AnPhamKhacController@getVeGiuXe') }}">Vé giữ xe</a><span class="ico"><img src="{{ url('asset/frontend/img/deal.png') }}" alt="" /></span></h5>        
        <hr />
        <!-- Price -->
        <div class=" pull-left"></div>
        <!-- Xem tiếp -->
        <div class="button text-right"><a href="{{ action('AnPhamKhacController@getVeGiuXe') }}">Xem tiếp</a></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>  

@stop
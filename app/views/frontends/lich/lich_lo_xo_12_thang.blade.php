@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Lịch Lò Xo 12 Tháng</h4>
                    @include('frontends._shared.one_third_products')
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop
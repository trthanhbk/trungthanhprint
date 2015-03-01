@extends('layouts.frontend')
@section('content')
    <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1px solid black;
            width: 100%;
            font-size: 13px;
            margin: 10px 0;           
        }
        th,td {
            vertical-align: top;
            width: 13%;
            border: 1px solid black;
            padding-left: 5px;
            text-align: center;
        }
        th {
            background: #BDBDBD;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <!-- In "id", use the value which you used in above anchor tags -->
                <div class="active">
                    <!-- Content -->
                    <h4 class="title">Bảng giá in tiêu đề thư</h4>
                    <p>Giấy tiêu đề</p>
                    <p>Giấy tiêu đề cho hóa đơn, báo giá và những lĩnh vực khác</p>
                    <p>Thêm logo, hình ảnh và nội dung của công ty, </p>
                    <p><img src="{{ asset('asset/frontend/img/danh_muc_thiet_ke/mau_chon_thiet_ke.png') }}" style="width: 100%"></p>
                    <table>
                        <tr>
                            <th style="width: 20%">Loại giấy / Số lượng</th>
                            <th>1000</th>
                            <th>2000</th>
                            <th>3000</th>
                            <th>4000</th>
                            <th>5000</th>
                            <th>10000</th>
                        </tr>
                        <tr>
                            <th>Giấy Off 80 gsm</th>
                            <td>1100</td>
                            <td>655</td>
                            <td>515</td>
                            <td>430</td>
                            <td>400</td>
                            <td>380</td>
                        </tr>
                        <tr>
                            <th>Giấy Off 80 gsm</th>
                            <td>1100</td>
                            <td>655</td>
                            <td>515</td>
                            <td>430</td>
                            <td>400</td>
                            <td>380</td>
                        </tr>
                        <tr>
                            <th>Giấy Off 80 gsm</th>
                            <td>1100</td>
                            <td>655</td>
                            <td>515</td>
                            <td>430</td>
                            <td>400</td>
                            <td>380</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="6" style="text-align: left;">
                                Ghi chú:
                                <ul>
                                    <li>
                                        Đơn giá chưa bao gồm 10% VAT.
                                    </li>
                                    <li>
                                         In ấn trên giấy offset 4 màu 1 mặt khổ A4 KT 21cm x 29.7 cm, không hình nền.
                                    </li>
                                    <li>
                                        Giao hàng trong vòng từ 3-5 này từ ngày duyệt maquette.
                                    </li>
                                    <li>
                                        Giao hàng tận nơi trong nội thành Hà Nội.
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </table>                    
                </div>            
        </div>
    </div>
<!-- Page content ends -->
@stop
@extends('master')
@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mượn trả</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên người mượn</th>
                                    <th>Phòng học</th>
                                    <th>Lớp học</th>
                                    <th>Môn học</th>
                                    <th>Ngày mượn</th>
                                    <th>Giờ mượn</th>
                                    <th>Ghi chú</th>
                                    <th colspan='2'><a href="{{ route('form_muon_phong') }}">Mượn phòng</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            	
                                <?php $stt = 0; ?>
                            	@foreach($muontra as $list_mt)
                                <tr class="odd gradeX">
                                    <td>{{ $stt=$stt + 1 }}</td>
                                    <td>{{ $list_mt -> giaovien -> tengv }}</td>
                                    <td>{{ $list_mt -> phonghoc -> tenphong }}</td>
                                    <td>{{ $list_mt -> lophoc -> tenlop }}</td>
                                    <td>{{ $list_mt -> monhoc -> tenmonhoc }}</td>
                                    <td>{{ $list_mt -> ngaymuon }}</td>
                                    <td>{{ $list_mt -> giomuon }}</td>
                                    <td>{{ $list_mt -> ghichu }}</td>
                                    <td><a href="{{ route('form_tra_phong',$list_mt -> id) }}">Trả phòng</a></td>
                                    <td><a href="{{ route('delete_muontra',$list_mt -> id) }}">Xóa</a></td>
                                </tr>
                                @endforeach
                                <!-- <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <!-- <div class="well">
                        <h4>DataTables Usage Information</h4>
                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                    </div> -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
@endsection
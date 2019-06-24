@extends('master')
@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mượn phòng</h1>
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
                        <form action="{!! route('tra_phong',$muontra -> id) !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <fieldset disabled>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mgười mượn</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="txtmagv" value="{{ $muontra -> giaovien -> tengv }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phòng học</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="txtphonghoc_id" value="{{ $muontra -> phonghoc -> tenphong }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lớp học</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="txtmalop" value="{{ $muontra -> lophoc ->tenlop }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Môn học</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtmamonhoc" value="{{ $muontra -> monhoc -> tenmonhoc }}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Ngày mượn</label>
                                  <input type="date" class="form-control" id="inputEmail4" placeholder="Email" name="txtngaymuon" value="{{ $muontra -> ngaymuon }}">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Giờ mượn</label>
                                  <input type="time" class="form-control" id="inputPassword4" placeholder="Password" name="txtgiomuon" value="{{ $muontra -> giomuon }}">
                                </div>
                            </div>
                            </fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Ngày trả</label>
                                  <input type="date" class="form-control" id="inputEmail4" placeholder="Email" name="txtngaytra">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Giờ trả</label>
                                  <input type="time" class="form-control" id="inputPassword4" placeholder="Password" name="txtgiotra">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Ghi chú</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="txtghichu">
                                    <option value="Đã trả">Đã trả</option>
                                </select>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên thiết bị</th>
                                        <th scope="col">ID phòng học</th>
                                        <th scope="col">Mã thiết bị</th>
                                        <th scope="col">Số lượng tốt</th>
                                        <th scope="col">Số lượng hỏng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt = 1; ?>
                                    @foreach($muontra->phonghoc->thietbi as $mt)
                                    <tr>
                                        <th scope="row">{{ $stt++ }}</th>
                                        <td><input type="text" class="form-control" name="txttenthietbi[]" value="{{ $mt->tenthietbi }}"></td>
                                        <td><input type="number" class="form-control" name="txtid_phonghoc[]" value="{{ $mt->id_phonghoc }}"></td>
                                        <td><input type="text" class="form-control" name="txtmathietbi[]" value="{{ $mt->mathietbi }}"></td>
                                        <td><input type="number" class="form-control" name="txtsoluongtot[]" value="{{ $mt->soluongtot }}"></td>
                                        <td><input type="number" class="form-control" name="txtsoluonghong[]" value="{{ $mt->soluonghong }}"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success">Trả phòng</button>
                            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Trả phòng</button> -->
                        </form>
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
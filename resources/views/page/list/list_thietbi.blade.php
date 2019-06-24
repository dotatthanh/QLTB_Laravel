@extends('master')
@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thiết bị</h1>
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
                                                <th style="width:50px;">STT</th>
                                                <th>Mã thiết bị</th>
                                                <th>Tên thiết bị</th>
                                                <th>Số lượng tốt</th>
                                                <th>Số lượng hỏng</th>
                                                <th>Phòng</th>
                                                <th colspan='2'>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Thêm thiết bị</button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	
                                            <?php $stt = 0; ?>
                                        	@foreach($thietbi as $list_thietbi)
                                            <tr class="odd gradeX">
                                                <td>{{ $stt=$stt + 1 }}</td>
                                                <td>{{ $list_thietbi -> mathietbi }}</td>
                                                <td>{{ $list_thietbi -> tenthietbi }}</td>
                                                <td>{{ $list_thietbi -> soluongtot }}</td>
                                                <td>{{ $list_thietbi -> soluonghong }}</td>
                                                <td>{{ $list_thietbi -> phonghoc -> tenphong}}</td>
                                                <td style="width:70px;"><a class="btn btn-warning" href="{{ route('form_edit_thietbi',$list_thietbi -> id) }}">Sửa</a></td>
                                                <td style="width:70px;"><a class="btn btn-danger" href="{{ route('delete_thietbi',$list_thietbi -> id) }}">Xóa</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                



                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm giáo viên</h5>
                                      </div>
                                      <div class="modal-body">
                                        <form action="{!! route('add_thietbi') !!}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mã thiết bị</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="txtmathietbi" aria-describedby="emailHelp" placeholder="VD: TB01">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên thiết bị</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="txttenthietbi" placeholder="VD: Máy chiếu">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Số lượng tốt</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1" name="txttongsoluongtot" aria-describedby="emailHelp" placeholder="VD: 10">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Số lượng hỏng</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1" name="txttongsoluonghong" placeholder="VD: 1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phòng</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="txttenphong">
                                                    <option></option>
                                                    @foreach($phonghoc as $list_ph)
                                                    <option  value="{{ $list_ph -> id }}">{{ $list_ph -> tenphong }}</option>
                                                    @endforeach   
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success">Thêm</button>
                                        </form>
                                      </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                          </div>
                                    </div>
                                  </div>
                                </div>



                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
@endsection
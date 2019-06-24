@extends('master')
@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phòng học</h1>
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
                                                <th>Mã phòng học</th>
                                                <th>Tên phòng học</th>
                                                <th colspan='2'>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Thêm phòng học</button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	
                                            <?php $stt = 0; ?>
                                        	@foreach($phonghoc as $list_phonghoc)
                                            <tr class="odd gradeX">
                                                <td>{{ $stt=$stt + 1 }}</td>
                                                <td>{{ $list_phonghoc -> maphong }}</td>
                                                <td>{{ $list_phonghoc -> tenphong }}</td>
                                                <td style="width:70px;"><a class="btn btn-warning" href="{{ route('form_edit_phonghoc',$list_phonghoc -> id) }}">Sửa</a></td>
                                                <td style="width:70px;"><a class="btn btn-danger" href="{{ route('delete_phonghoc',$list_phonghoc -> id) }}">Xóa</a></td>
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
                                        <form action="{!! route('add_phonghoc') !!}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mã phòng học</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="txtmaphong" aria-describedby="emailHelp" placeholder="VD: P201">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Tên phòng học</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="txttenphong" placeholder="VD: Phòng 201">
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
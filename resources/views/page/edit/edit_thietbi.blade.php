@extends('master')
@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa thiết bị</h1>
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
                        @foreach($thietbi as $tb)
                        <form action="{!! route('edit_thietbi', $tb -> id) !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã thiết bị</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="txtmathietbi" aria-describedby="emailHelp" value="{{ $tb -> mathietbi }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên thiết bị</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="txttenthietbi" value="{{ $tb -> tenthietbi }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng tốt</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" name="txttongsoluongtot" aria-describedby="emailHelp" value="{{ $tb -> soluongtot }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số lượng hỏng</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" name="txttongsoluonghong" value="{{ $tb -> soluonghong }}">
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
                            <button type="submit" class="btn btn-success">Sửa</button>
                        </form>
                        @endforeach
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
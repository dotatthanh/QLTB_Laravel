@extends('master')
@section('content')
<!DOCTYPE html>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm giáo viên</h1>
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
                        <form action="{!! route('add_gv') !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã giáo viên</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="txtmagv" aria-describedby="emailHelp" placeholder="VD: GV01">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên giáo viên</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="txttengv" placeholder="VD: Nguyễn Văn A">
                            </div>
                            <button type="submit" class="btn btn-success">Thêm</button>
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
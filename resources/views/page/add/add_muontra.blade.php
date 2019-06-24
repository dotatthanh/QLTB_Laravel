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
                        <form action="{!! route('muon_phong') !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Người mượn</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="sltmagv">
                                    <option></option>
                                    @foreach($giaovien as $list_gv)
                                    <option value="{{ $list_gv -> id }}">{{ $list_gv -> tengv }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Phòng học</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="txtid_phonghoc">
                                    <option></option>
                                    @foreach($phonghoc as $list_ph)
                                    <option value="{{ $list_ph -> id }}">{{ $list_ph -> tenphong }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Lớp học</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="sltmalop">
                                    <option></option>
                                    @foreach($lophoc as $list_lh)
                                    <option value="{{ $list_lh -> id }}">{{ $list_lh -> tenlop }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Môn học</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="sltmamonhoc">
                                    <option></option>
                                    @foreach($monhoc as $list_mh)
                                    <option value="{{ $list_mh -> id }}">{{ $list_mh -> tenmonhoc }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Ngày mượn</label>
                                  <input type="date" class="form-control" id="inputEmail4" placeholder="Email" name="txtngaymuon">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Giờ mượn</label>
                                  <input type="time" class="form-control" id="inputPassword4" placeholder="Password" name="txtgiomuon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Ghi chú</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="txtghichu">
                                    <option value="Mượn phòng">Mượn phòng</option>
                                </select>
                            </div>
                                <button type="submit" class="btn btn-success">Mượn phòng</button>
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
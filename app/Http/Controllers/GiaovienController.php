<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\sinhvien;
use App\giaovien;
use App\monhoc;
use App\muontra;
use App\phonghoc;
use App\thietbi;
use App\lophoc;

class GiaovienController extends Controller
{
    // Hiển thị danh sách giáo viên
    public function list_gv()
    {
    	$giaovien = DB::table('giaovien') -> get();

    	return view('page.list.list_gv', compact('giaovien'));
    }

    //Thêm giáo viên
    // public function form_add_gv()
    // {
    // 	return view('page.add.add_gv');
    // }
    public function add_gv(Request $request)
    {
    	$giaovien = new giaovien;
    	$giaovien -> magv = $request -> txtmagv;
    	$giaovien -> tengv = $request -> txttengv;
    	$giaovien -> save();
    	return redirect('list_gv');
    }
    //Sửa giáo viên
    public function get_id_gv($id)
    {
    	$giaovien = giaovien::where('id', $id) -> get();
    	return view('page.edit.edit_gv', compact('giaovien'));
    }
    public function edit_gv(Request $request,$id)
    {
    	$giaovien = giaovien::where('id',$id)->first();

        $giaovien -> magv = $request -> txtmagv; 
        $giaovien -> tengv = $request -> txttengv;
        $giaovien -> save(); 

        return redirect('list_gv'); 
    }

    //Xóa giáo viên
    public function delete_gv($id)
    {
        $giaovien = giaovien::where('id', $id);
        $giaovien -> delete();

        return redirect('list_gv');
    }
}

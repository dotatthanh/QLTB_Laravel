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

class LophocController extends Controller
{
    // Hiển thị danh sách lớp học
    public function list_lophoc()
    {
    	$lophoc = DB::table('lophoc') -> get();

    	return view('page.list.list_lophoc', compact('lophoc'));
    }

    //Thêm lớp học
    public function add_lophoc(Request $request)
    {
    	$lophoc = new lophoc;
        $lophoc -> malop = $request -> txtmalop;
    	$lophoc -> tenlop = $request -> txttenlop;
    	$lophoc -> save();
    	return redirect('list_lophoc');
    }
    //Sửa lớp học
    public function get_id_lophoc($id)
    {
    	$lophoc = lophoc::where('id', $id) -> get();
    	return view('page.edit.edit_lophoc', compact('lophoc'));
    }
    public function edit_lophoc(Request $request,$id)
    {
    	$lophoc = lophoc::where('id',$id)->first();
        $lophoc -> malop = $request -> txtmalop;
        $lophoc -> tenlop = $request -> txttenlop;
        $lophoc -> save(); 

        return redirect('list_lophoc'); 
    }

    //Xóa lớp học
    public function delete_lophoc($id)
    {
        $lophoc = lophoc::where('id', $id);
        $lophoc -> delete();

        return redirect('list_lophoc');
    }
}

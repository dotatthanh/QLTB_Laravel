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

class MonhocController extends Controller
{
    // Hiển thị danh sách môn học
    public function list_monhoc()
    {
    	$monhoc = DB::table('monhoc') -> get();

    	return view('page.list.list_monhoc', compact('monhoc'));
    }

    //Thêm môn học
    // public function form_add_monhoc()
    // {
    // 	return view('page.add.add_monhoc');
    // }
    public function add_monhoc(Request $request)
    {
    	$monhoc = new monhoc;
        $monhoc -> mamonhoc = $request -> txtmamonhoc;
    	$monhoc -> tenmonhoc = $request -> txttenmonhoc;
    	$monhoc -> save();
    	return redirect('list_monhoc');
    }
    //Sửa môn học
    public function get_id_monhoc($id)
    {
    	$monhoc = monhoc::where('id', $id) -> get();
    	return view('page.edit.edit_monhoc', compact('monhoc'));
    }
    public function edit_monhoc(Request $request,$id)
    {
    	$monhoc = monhoc::where('id',$id)->first();
        $monhoc -> mamonhoc = $request -> txtmamonhoc;
        $monhoc -> tenmonhoc = $request -> txttenmonhoc;
        $monhoc -> save(); 

        return redirect('list_monhoc'); 
    }

    //Xóa môn học
    public function delete_monhoc($id)
    {
        $monhoc = monhoc::where('id', $id);
        $monhoc -> delete();

        return redirect('list_monhoc');
    }
}

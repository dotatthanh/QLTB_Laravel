<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\sinhvien;
use App\giaovien;
use App\monhoc;
use App\muontra;
use App\phonghoc;
use App\thongtin;
use App\thietbi;
use App\lophoc;

class PhonghocController extends Controller
{
    // Hiển thị danh sách phòng học
    public function list_phonghoc()
    {
    	$phonghoc = DB::table('phonghoc') -> get();

    	return view('page.list.list_phonghoc', compact('phonghoc'));
    }

    //Thêm phòng học
    // public function form_add_phonghoc()
    // {
    // 	return view('page.add.add_phonghoc');
    // }
    public function add_phonghoc(Request $request)
    {
    	$phonghoc = new phonghoc;
        $phonghoc -> maphong = $request -> txtmaphong;
    	$phonghoc -> tenphong = $request -> txttenphong;
    	$phonghoc -> save();
    	return redirect('list_phonghoc');
    }
    //Sửa phòng học
    public function get_id_phonghoc($id)
    {
    	$phonghoc = phonghoc::where('id', $id) -> get();
    	return view('page.edit.edit_phonghoc', compact('phonghoc'));
    }
    public function edit_phonghoc(Request $request,$id)
    {
    	$phonghoc = phonghoc::where('id',$id)->first();
        $phonghoc -> maphong = $request -> txtmaphong;
        $phonghoc -> tenphong = $request -> txttenphong;
        $phonghoc -> save(); 

        return redirect('list_phonghoc'); 
    }

    //Xóa phòng học
    public function delete_phonghoc($id)
    {
        $phonghoc = phonghoc::where('id', $id);
        $phonghoc -> delete();

        return redirect('list_phonghoc');
    }
}

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

class ThietbiController extends Controller
{
    // Hiển thị danh sách thiết bị
    public function list_thietbi()
    {
    	$thietbi = thietbi::all();
        $phonghoc = DB::table('phonghoc') -> get();

    	return view('page.list.list_thietbi', compact('thietbi','phonghoc'));
    }

    //Thêm thiết bị
    // public function form_add_thietbi()
    // {
    //     $phonghoc = DB::table('phonghoc') -> get();
    // 	return view('page.add.add_thietbi',compact('phonghoc'));
    // }
    public function add_thietbi(Request $request)
    {
    	$thietbi = new thietbi;
        $thietbi -> mathietbi = $request -> txtmathietbi;
    	$thietbi -> tenthietbi = $request -> txttenthietbi;
    	$thietbi -> soluongtot = $request -> txttongsoluongtot;
    	$thietbi -> soluonghong = $request -> txttongsoluonghong;
        $thietbi -> id_phonghoc = $request -> txttenphong;
    	$thietbi -> save();
    	return redirect('list_thietbi');
    }






    //Sửa thiết bị
    public function get_id_thietbi($id)
    {
    	// $thietbi = thietbi::where('id',$id)->get();
        $thietbi = thietbi::where('id',$id) -> get();
        $phonghoc = DB::table('phonghoc') -> get();
    	return view('page.edit.edit_thietbi', compact('thietbi','phonghoc'));
    }
    public function edit_thietbi(Request $request,$id)
    {
    	$thietbi = thietbi::where('id',$id)->first();

        $thietbi -> mathietbi = $request -> txtmathietbi;
        $thietbi -> tenthietbi = $request -> txttenthietbi;
        $thietbi -> soluongtot = $request -> txttongsoluongtot;
        $thietbi -> soluonghong = $request -> txttongsoluonghong;
        $thietbi -> id_phonghoc = $request -> txttenphong;
    	$thietbi -> save();

        return redirect('list_thietbi'); 
    }








    //Xóa thiết bị
    public function delete_thietbi($id)
    {
        $thietbi = thietbi::where('id', $id);
        $thietbi -> delete();

        return redirect('list_thietbi');
    }
}

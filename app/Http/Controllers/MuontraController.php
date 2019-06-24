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

class MuontraController extends Controller
{
	//Danh sách mượn
	public function list_muon()
	{
		$muontra = muontra::all()->where('ngaytra', null);
		return view('page.list.list_muon', compact('muontra'));
	}



    //Danh sách trả
    public function list_tra()
    {
        $muontra = muontra::all()->where('ghichu', 'Đã trả');
        return view('page.list.list_tra', compact('muontra'));
    }




	//Mượn phòng
    public function form_muon_phong()
    {
    	$giaovien = giaovien::all();
    	$phonghoc = phonghoc::all();
    	$lophoc = lophoc::all();
    	$monhoc = monhoc::all();
    	return view('page.add.add_muontra', compact('giaovien','phonghoc','lophoc','monhoc'));
    }
    public function muon_phong(Request $request)
    {
    	$muontra = new muontra;
        $muontra -> id_gv = $request -> sltmagv;
        $muontra -> id_phonghoc = $request -> txtid_phonghoc;
    	$muontra -> id_lophoc = $request -> sltmalop;
    	$muontra -> id_monhoc = $request -> sltmamonhoc;
    	$muontra -> ngaymuon = $request -> txtngaymuon;
    	$muontra -> giomuon = $request -> txtgiomuon;
    	$muontra -> ngaytra = $request -> txtngaytra;
    	$muontra -> giotra = $request -> txtgiotra;
    	$muontra -> ghichu = $request -> txtghichu;
    	$muontra -> save();

    	return redirect('list_muon');
    }

    //--------Trả phòng
    //Lấy ra id mượn phòng
    public function get_id_muontra($id)
    {
    	$muontra = muontra::find($id);
        $test = $muontra->phonghoc->id;
    	return view('page.edit.edit_traphong', compact('muontra','test'));
    }
    //Cập nhật ngày trả + giờ trả
    public function tra_phong(Request $request,$id)
    {
    	

        // $where['id_phonghoc'] = $muontra->phonghoc->id;
        // $update = [['soluongtot' => $request->txtsoluongtot],['soluonghong' => $request->txtsoluonghong]];
        // DB::table('thietbi')->whereIn($where)->update($update);

    
    foreach ($request->txttenthietbi as $key => $tenthietbi) {
        $thietbi = thietbi::all();
        foreach ($thietbi as $tb) {
            if ($tb->id_phonghoc == $request->txtid_phonghoc) {
                if ($tb->tenthietbi == $request->txtmathietbi[$key]) {
                    $tb->soluongtot = $request->txtsoluongtot[$key] ? $request->txtsoluongtot[$key] : 0;
                    $tb->soluonghong = $request->txtsoluonghong[$key] ? $request->txtsoluonghong[$key] : 0;
                    $tb->save();
                }
            }
        }
    }
    $muontra = muontra::where('id',$id)->first();
        $muontra -> ngaytra = $request -> txtngaytra;
        $muontra -> giotra = $request -> txtgiotra;
        $muontra -> ghichu = $request -> txtghichu;
        $muontra -> save();
    	return redirect('list_tra');
    }
    //Cập nhật lại số lượng các thiết bị
    //public function thietbi(Request $request)
    //{
       
        // $thietbi = thietbi::where('id_phonghoc', $muontra->phonghoc->id)
        //                     ->where('soluongtot', 'soluonghong')
        //                     ->update(['soluongtot' => $request->txtsoluongtot],['soluonghong' => $request->txtsoluonghong]);
        


        // foreach (???????????? as $id_phonghoc) {
        //     foreach ($request->txtsoluongtot as $soluongtot) {
        //         foreach ($request->txtsoluonghong as $soluonghong) {
        //             $thietbi = thietbi::where('id_phonghoc', $id_phonghoc);
        //             $thietbi->soluongtot = $soluongtot;
        //             $thietbi->soluonghong = $soluonghong;
        //         }
        //     }
        // }


    //}
































    //Xóa mượn trả
    public function delete_muontra($id)
    {
    	$muontra = muontra::find($id);
    	$muontra -> delete();

    	return redirect('list_muon');
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\muontra;
// use App\phonghoc;
// use App\thongtin;
// Route::get('/danhsach', [
//     'as' => 'danhsach',
//     'uses' => 'MuontraController@danhsach',
// ]);

// Route::get('/test/{id}', [
//     'as' => 'test',
//     'uses' => 'MuontraController@test',
// ]);



// Route::get('test1', function() {
//     $muontra = App\muontra::find(1);
//     foreach ($muontra->phonghoc->thongtin as $thietbi) {
//         echo $thietbi->mathietbi.$thietbi->soluongtot;
//     }



// });
// Route::get('test2', function() {
//     $phonghoc = App\phonghoc::find(1);
//     foreach ($phonghoc->muontra as $mt) {
//         echo $mt->malop;
//     }
// });

// Route::get('test3', function() {
//     $thongtin = App\thongtin::find(1);
//     foreach ($thongtin->phonghoc->muontra as $mt) {
//         echo $mt->giomuon;
//     }
// });

// Route::get('test4', function() {
//     $muontra = App\muontra::find(1);
//     foreach ($muontra->phonghoc->thongtin->thietbi as $mt) {
//         echo $mt->tenthietbi;
//     }
// });

// Route::get('test5', function() {
//     $a = App\thietbi::find(1);
//     // foreach ($muontra->phonghoc as $mt) {
//     //     echo $mt->tenphong;
//     // }
//     echo $a->id;
// });







// Login
Route::get('login','LoginController@getLogin');

Route::post('login','LoginController@postLogin');







Route::get('/home', function () {
    return view('page.layout.index');
});
Route::get('/', function () {
    return view('page.layout.login');
});
Route::get('/index', [
    'as' => 'index',
    'uses' => 'Controller@get_index',
]);



//--------------------------------------- Danh sách ------------------------------------------
// Dánh sách sinh viên
// Route::get('/list_sv', [
//     'as' => 'list_sv',
//     'uses' => 'SinhvienController@list_sv',
// ]);

// Dánh sách giáo viên
Route::get('/list_gv', [
    'as' => 'list_gv',
    'uses' => 'GiaovienController@list_gv',
]);

// Dánh sách lớp học
Route::get('/list_lophoc', [
    'as' => 'list_lophoc',
    'uses' => 'LophocController@list_lophoc',
]);

// Dánh sách môn học
Route::get('/list_monhoc', [
    'as' => 'list_monhoc',
    'uses' => 'MonhocController@list_monhoc',
]);

// Dánh sách phòng học
Route::get('/list_phonghoc', [
    'as' => 'list_phonghoc',
    'uses' => 'PhonghocController@list_phonghoc',
]);

// Dánh sách thiết bị
Route::get('/list_thietbi', [
    'as' => 'list_thietbi',
    'uses' => 'ThietbiController@list_thietbi',
]);

// Dánh sách thiết bị của từng phòng
// Route::get('/list_thietbitungphong', [
//     'as' => 'list_thietbitungphong',
//     'uses' => 'ThongtinController@list_thietbitungphong',
// ]);

// Dánh sách mượn thiết bị
Route::get('/list_muon', [
    'as' => 'list_muon',
    'uses' => 'MuontraController@list_muon',
]);

// Dánh sách trả thiết bị
Route::get('/list_tra', [
    'as' => 'list_tra',
    'uses' => 'MuontraController@list_tra',
]);






//--------------------------------------- Thêm ------------------------------------------
// Thêm giáo viên
// Route::get('/form_add_gv', [
//     'as' => 'form_add_gv',
//     'uses' => 'GiaovienController@form_add_gv',
// ]);
Route::post('add_gv',[
    'as' => 'add_gv',
    'uses' => 'GiaovienController@add_gv',
]);

// Thêm môn học
// Route::get('/form_add_monhoc', [
//     'as' => 'form_add_monhoc',
//     'uses' => 'MonhocController@form_add_monhoc',
// ]);
Route::post('add_monhoc',[
    'as' => 'add_monhoc',
    'uses' => 'MonhocController@add_monhoc',
]);

// Thêm phòng học
// Route::get('/form_add_phonghoc', [
//     'as' => 'form_add_phonghoc',
//     'uses' => 'PhonghocController@form_add_phonghoc',
// ]);
Route::post('add_phonghoc',[
    'as' => 'add_phonghoc',
    'uses' => 'PhonghocController@add_phonghoc',
]);

// Thêm sinh viên
// Route::get('/form_add_sv', [
//     'as' => 'form_add_sv',
//     'uses' => 'SinhvienController@form_add_sv',
// ]);
// Route::post('add_sv',[
//     'as' => 'add_sv',
//     'uses' => 'SinhvienController@add_sv',
// ]);

// Thêm lớp học
// Route::get('/form_add_lophoc', [
//     'as' => 'form_add_lophoc',
//     'uses' => 'LophocController@form_add_lophoc',
// ]);
Route::post('add_lophoc',[
    'as' => 'add_lophoc',
    'uses' => 'LophocController@add_lophoc',
]);

// Thêm thiết bị
// Route::get('/form_add_thietbi', [
//     'as' => 'form_add_thietbi',
//     'uses' => 'ThietbiController@form_add_thietbi',
// ]);
Route::post('add_thietbi',[
    'as' => 'add_thietbi',
    'uses' => 'ThietbiController@add_thietbi',
]);

// Thêm thiết bị của từng phòng
// Route::get('/form_add_thietbitungphong', [
//     'as' => 'form_add_thietbitungphong',
//     'uses' => 'ThongtinController@form_add_thietbitungphong',
// // ]);
// Route::post('add_thietbitungphong',[
//     'as' => 'add_thietbitungphong',
//     'uses' => 'ThongtinController@add_thietbitungphong',
// ]);




//--------------------------------------- Sửa ------------------------------------------
// Sửa giáo viên
Route::get('/form_edit_gv/{id}',[
    'as' => 'form_edit_gv',
    'uses' => 'GiaovienController@get_id_gv',
]);
Route::post('edit_gv/{id}',[
    'as' => 'edit_gv',
    'uses' => 'GiaovienController@edit_gv',
]);

// Sửa môn học
Route::get('/form_edit_monhoc/{id}',[
    'as' => 'form_edit_monhoc',
    'uses' => 'MonhocController@get_id_monhoc',
]);
Route::post('edit_monhoc/{id}',[
    'as' => 'edit_monhoc',
    'uses' => 'MonhocController@edit_monhoc',
]);

// Sửa phòng học
Route::get('/form_edit_phonghoc/{id}',[
    'as' => 'form_edit_phonghoc',
    'uses' => 'PhonghocController@get_id_phonghoc',
]);
Route::post('edit_phonghoc/{id}',[
    'as' => 'edit_phonghoc',
    'uses' => 'PhonghocController@edit_phonghoc',
]);

// Sửa lớp học
Route::get('/form_edit_lophoc/{id}',[
    'as' => 'form_edit_lophoc',
    'uses' => 'LophocController@get_id_lophoc',
]);
Route::post('edit_lophoc/{id}',[
    'as' => 'edit_lophoc',
    'uses' => 'LophocController@edit_lophoc',
]);

// Sửa sinh viên
// Route::get('/form_edit_sv/{id}',[
//     'as' => 'form_edit_sv',
//     'uses' => 'SinhvienController@get_id_sv',
// ]);
// Route::post('edit_sv/{id}',[
//     'as' => 'edit_sv',
//     'uses' => 'SinhvienController@edit_sv',
// ]);

// Sửa thiết bị
Route::get('/form_edit_thietbi/{id}',[
    'as' => 'form_edit_thietbi',
    'uses' => 'ThietbiController@get_id_thietbi',
]);
Route::post('edit_thietbi/{id}',[
    'as' => 'edit_thietbi',
    'uses' => 'ThietbiController@edit_thietbi',
]);

// Sửa thiết bị của từng phòng
// Route::get('/form_edit_thietbitungphong/{id}',[
//     'as' => 'form_edit_thietbitungphong',
//     'uses' => 'ThongtinController@get_id_thietbitungphong',
// ]);
// Route::post('edit_thietbitungphong/{id}',[
//     'as' => 'edit_thietbitungphong',
//     'uses' => 'ThongtinController@edit_thietbitungphong',
// ]);

// Trả phòng
Route::get('/form_tra_phong/{id}',[
    'as' => 'form_tra_phong',
    'uses' => 'MuontraController@get_id_muontra',
]);
Route::post('tra_phong/{id}',[
    'as' => 'tra_phong',
    'uses' => 'MuontraController@tra_phong',
]);





//--------------------------------------- Xóa ------------------------------------------
// Xóa sinh viên
// Route::get('/delete_sv/{id}',[
//     'as' => 'delete_sv',
//     'uses' => 'SinhvienController@delete_sv',
// ]);

// Xóa giáo viên
Route::get('/delete_gv/{id}',[
    'as' => 'delete_gv',
    'uses' => 'GiaovienController@delete_gv',
]);

// Xóa phòng học
Route::get('/delete_phonghoc/{id}',[
    'as' => 'delete_phonghoc',
    'uses' => 'PhonghocController@delete_phonghoc',
]);

// Xóa môn học
Route::get('/delete_monhoc/{id}',[
    'as' => 'delete_monhoc',
    'uses' => 'MonhocController@delete_monhoc',
]);

// Xóa thiết bị
Route::get('/delete_thietbi/{id}',[
    'as' => 'delete_thietbi',
    'uses' => 'ThietbiController@delete_thietbi',
]);

// Xóa thiết bị của từng phòng
Route::get('/delete_thietbitungphong/{id}',[
    'as' => 'delete_thietbitungphong',
    'uses' => 'ThongtinController@delete_thietbitungphong',
]);

// Xóa lớp học
Route::get('/delete_lophoc/{id}',[
    'as' => 'delete_lophoc',
    'uses' => 'LophocController@delete_lophoc',
]);

// Xóa mượn trả
Route::get('/delete_muontra/{id}',[
    'as' => 'delete_muontra',
    'uses' => 'MuontraController@delete_muontra',
]);





//--------------------------------------- Mượn ------------------------------------------
//Mượn phòng
Route::get('/form_muon_phong', [
    'as' => 'form_muon_phong',
    'uses' => 'MuontraController@form_muon_phong',
]);
Route::post('muon_phong',[
    'as' => 'muon_phong',
    'uses' => 'MuontraController@muon_phong',
]);






//--------------------------------------- Trả ------------------------------------------
Route::get('/form_tra_phong/{id}', [
    'as' => 'form_tra_phong',
    'uses' => 'MuontraController@get_id_muontra',
]);
Route::post('tra_phong/{id}',[
    'as' => 'tra_phong',
    'uses' => 'MuontraController@tra_phong',
]);


Route::post('thietbi',[
    'as' => 'thietbi',
    'uses' => 'MuontraController@thietbi',
]);














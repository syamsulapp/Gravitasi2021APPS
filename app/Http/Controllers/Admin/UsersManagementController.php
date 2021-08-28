<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ModelsAdmin\AdminModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use keygen;

class UsersManagementController extends Controller {
    // method (functionnya)
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $users_management = AdminModels::all();
        return view('gravitasi.admin.UsersManagement.users_management',compact('users_management'));
    }

    public function view_tambah() {
        return view('gravitasi.admin.UsersManagement.users_tambah');
    }

    public function adddata(Request $getdata) {
        $pesan_error = [
            'required' => ':attribute jangan di kosongkan',
            'max' => 'panjang maksimum sampe 100 karakter',
            'min' => 'minimum sampe 4 karakter',
            'same' => 'password yang anda ketikan tidak sama',
            'unique' => 'email yang sdh ada sebelumnya',
        ];
        $getdata->validate([
            'nama' => 'required|max:100|min:4',
            'email' => 'required|max:100|min:4|unique:users',
            'password' => 'required|max:100|min:4',
            'konfir_pass' => 'required|max:100|min:4|same:password',
            'nama_sekolah' => 'required|max:100|min:4',
            'asal_sekolah' => 'required',
        ], $pesan_error);
        AdminModels::create([
            'name' => $getdata->nama,
            'email' => $getdata->email,
            'noreg' => keygen::numeric(10)->generate(),
            'password' => Hash::make($getdata->password),
            'asalsekolah' => $getdata->asal_sekolah,
            'namasekolah' => $getdata->nama_sekolah,
        ]);

        return redirect('/admin/users-management')->with('sukses','data berhasil di tambahkan');
    }

    public function viewedit(AdminModels $editdata) {
        return view('gravitasi.admin.UsersManagement.users_edit_data',compact('editdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $databaru
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function ubahdata(Request $databaru, AdminModels $dataLama) {

        $pesan_error = [
            'required' => ':attribute jangan di kosongkan',
            'max' => 'panjang maksimum sampe 100 karakter',
            'min' => 'minimum sampe 4 karakter',
            'same' => 'password yang anda ketikan tidak sama',
        ];
        $databaru->validate([
            'nama' => 'required|max:100|min:4',
            'email' => 'required|max:100|min:4',
            'password' => 'required|max:100|min:4',
            'konfir_pass' => 'required|max:100|min:4|same:password',
            'nama_sekolah' => 'required|max:100|min:4',
            'asal_sekolah' => 'required',
        ], $pesan_error);

        AdminModels::where('id', $dataLama->id)
            ->update([
                'name' => $databaru->nama,
                'email' => $databaru->email,
                'password' => Hash::make($databaru->password),
                'role' => $databaru->role,
                'asalsekolah' => $databaru->asal_sekolah,
                'namasekolah' => $databaru->nama_sekolah,
            ]);

        return redirect('/admin/users-management')->with('sukses','data berhasil di ubah');

    }

    public function delete(AdminModels $hapusdata) {
        AdminModels::destroy('id', $hapusdata->id);
        return redirect('/admin/users-management')->with('sukses','data berhasil di hapus');

    }
}

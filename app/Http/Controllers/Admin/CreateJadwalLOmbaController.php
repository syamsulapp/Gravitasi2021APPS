<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModelsAdmin\ModelsJadwal;
use App\Models\ModelsAdmin\ModelsLomba;

class CreateJadwalLOmbaController extends Controller {
    // methodnya(functionnya disini)
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** method/function dibawah khusus untuk lomba */
    public function lombaGravitasi(ModelsLomba $lomba) {
        $lomba = $lomba->all();
        return view('gravitasi.admin.lomba.lomba',compact('lomba'));
    }

    public function formtambahlomba() {
        return view('gravitasi.admin.lomba.form_tambah_lomba');
    }

    public function insertdatalomba(Request $getlomba) {

        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'min' => 'minimal 4 karakter',
            'max' => 'maximal 128 karakter',
        ];

        $getlomba->validate([
           'nama_lomba'=> 'required|max:128|min:4',
           'deskripsi_lomba' => 'required|max:128|min:4',
        ], $kostum);

        ModelsLomba::create([
            'nama_lomba' => $getlomba->nama_lomba,
            'deskripsi_lomba' => $getlomba->deskripsi_lomba,
        ]);

        return redirect('admin/lomba-view')->with('sukses','data lomba berhasil di tambahkan');
    }

    public function edit (ModelsLomba $getlomba) {
        return view('gravitasi.admin.lomba.edit_lomba',compact('getlomba'));
    }

    public function updatelomba(Request $databaru, ModelsLomba $datalama) {

        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'min' => 'minimal 4 karakter',
            'max' => 'maximal 128 karakter',
        ];

        $databaru->validate([
            'nama_lomba'=> 'required|max:128|min:4',
            'deskripsi_lomba' => 'required|max:128|min:4',
        ], $kostum);
        ModelsLomba::where('id', $datalama->id)
            ->update([
                'nama_lomba' => $databaru->nama_lomba,
                'deskripsi_lomba' => $databaru->deskripsi_lomba,
            ]);
        return redirect('admin/lomba-view')->with('sukses','Data Lomba Berhasil Di Update');
    }

    public function delete_lomba(ModelsLomba $deletelomba) {
        ModelsLomba::destroy('id', $deletelomba->id);

        return redirect('admin/lomba-view')->with('sukses','lomba berhasil di hapus');
    }

    /** ===== end controller lomba ========= */


    /** method/function dibawah khusus untuk jadwal lomba */
    public function jadwallomba(ModelsJadwal $getjadwal) {
        $jadwal = $getjadwal->all();
        return view('gravitasi.admin.jadwalLomba.jadwal_lomba',compact('jadwal'));
    }

    public function formtambahjadwal() {
        return view('gravitasi.admin.jadwalLomba.form_tambah_jadwal_lomba');
    }

    public function insertdatajadwal(Request $getJadwalLomba) {

        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'min' => 'minimal 4 karakter',
            'max' => 'maximal 128 karakter',
        ];

        $getJadwalLomba->validate([
            'nama_lomba'=> 'required|max:128|min:4',
            'deskripsi_lomba' => 'required|max:128|min:4',
            'jadwal_lomba' => 'required',
            'waktu' => 'required',
        ], $kostum);
        ModelsJadwal::create([
            'nama_lomba' => $getJadwalLomba->nama_lomba,
            'tanggal' => $getJadwalLomba->jadwal_lomba,
            'waktu' => $getJadwalLomba->waktu,
            'deskripsi_jadwal_lomba' => $getJadwalLomba->deskripsi_lomba,
        ]);

        return redirect('admin/jadwal-lomba-view')->with('sukses','data jadwal lomba berhasil di tambahkan');

    }
    public function delete_jadwal(ModelsJadwal $deletejadwal) {
        ModelsJadwal::destroy('id', $deletejadwal->id);

        return redirect('admin/jadwal-lomba-view')->with('sukses','data jadwal lomba berhasil di hapus');
    }

    public function edit_jadwal(ModelsJadwal $editjadwal) {
        return view('gravitasi.admin.jadwalLomba.edit_jadwal_lomba',compact('editjadwal'));
    }

    public function update_jadwal(Request $databaru, ModelsJadwal $datalama) {

        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'min' => 'minimal 4 karakter',
            'max' => 'maximal 128 karakter',
        ];

        $databaru->validate([
            'nama_lomba'=> 'required|max:128|min:4',
            'deskripsi_lomba' => 'required|max:128|min:4',
            'jadwal_lomba' => 'required',
            'waktu' => 'required',
        ], $kostum);

        ModelsJadwal::where('id',$datalama->id)
            ->update([
                'nama_lomba' => $databaru->nama_lomba,
                'tanggal' => $databaru->jadwal_lomba,
                'waktu' => $databaru->waktu,
                'deskripsi_jadwal_lomba' => $databaru->deskripsi_lomba,
            ]);
        return redirect('admin/jadwal-lomba-view')->with('sukses','data jadwal lomba berhasil di ubah');

    }



}

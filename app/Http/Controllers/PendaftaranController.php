<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Sesssion;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
        $data = pendaftaran::orderBy('nim','desc')->get();
        return view('pendaftaran.index',[
            "title" => "Pendaftaran"
        ])->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pendaftaran.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn'=>'required|numeric|unique:pendaftarans,nisn',
            'nim'=>'required|numeric|unique:pendaftarans,nim',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jurusan'=>'required',
            'gambar'=>'required|mimes:jpeg,jpg,png,gif',
        ],[
            'nim.required' => 'NIM wajib di isi',
            'nim.numeric' => 'NIM haris dalam angka',
            'nim.unique' => 'NIM sudah terdaftar',
            'nisn.required' => 'NISN wajib di isi',
            'nisn.nunmeric' => 'NISN harus dalam angka',
            'nisn.unique' => 'NISN sudah terdaftar',
            'nama.required' => 'Nama wajib di isi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib di isi',
            'jurusan.required' => 'Jurusan wajib di isi',
            'gambar.required' => 'Gambar wajib di isi',
        ]);
            $foto_file = $request->file('gambar');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".". $foto_ekstensi;
            $foto_file->move(public_path('foto'),$foto_nama);
        
            $data = [
            'nim' => $request->nim,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,   
            'gambar' => $foto_nama 
        ];
        pendaftaran::create($data);
        return redirect()->to('pendaftaran')->with('success','Berhasil menambahkan data');
       
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = pendaftaran::where('nim',$id)->first();
        return view('pendaftaran.edit',[
            "title" =>"Pendaftaran"
        ])->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jurusan'=>'required',
            'gambar'=>'required',
        ],[
            'nama.required' => 'Nama wajib di isi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib di isi',
            'jurusan.required' => 'Jurusan wajib di isi',
            'gambar.required' => 'Gambar wajib di isi',
        ]);
      
        $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
        ];
        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar'=>'mimes:jpeg,jpg,png,gif'
            ],[
                'gambar.mimes' => 'Gambar hanya boleh berekstensi JPEG,JPG,PNG,DAN GIF'
            ]);
            $foto_file = $request->file('gambar');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".". $foto_ekstensi;
            $foto_file->move(public_path('foto'),$foto_nama);

            $data_foto = pendaftaran::where('nim',$id)->first();
            File::delete(public_path('foto').'/'.$data_foto->gambar);

            $data ['gambar']=$foto_nama;
            
        }
        pendaftaran::where('nim',$id)->update($data);
        return redirect()->to('/dashboard/siswa')->with('success','Berhasil menganti data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = pendaftaran::where('nim',$id)->first();
        File::delete(public_path('foto').'/'.$data->gambar);

        pendaftaran::where('nim',$id)->delete();
        return redirect()->to('/dashboard/siswa')->with('succcess','berhasil menghapus data');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Employee::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(3);
        } else {
            $data = Employee::paginate(3);
        }

        return view ('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        return view ('tambahdata');
    }

    public function insertdata (Request $request){ 
        // dd($request->all());
        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambah'); 
    }

    public function tampilkandata ($id) {
        $data = Employee::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata (Request $request, $id) {
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diubah'); 
    }

    public function delete ($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('notifdelete', 'Data Berhasil Dihapus'); 
    }
    
}

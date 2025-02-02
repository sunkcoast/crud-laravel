<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use App\Models\Cabang;
use App\Models\Skill;
use App\Models\Manager;
use Illuminate\Http\Request;


// test pull request

class EmployeeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Employee::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(3);
        } else {
            $data = Employee::paginate(4);
        }

        return view ('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        $cabangs = Cabang::all();      
        $managers = Manager::all();    
        $skills = Skill::all();

        return view('tambahdata', compact('cabangs', 'managers', 'skills'));

    }

    public function insertdata (Request $request){ 
        // dd($request->all());
        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $uniqueFileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $filePath = $request->file('foto')->storeAs('fotopegawai', $uniqueFileName, 'public');
            $data->foto = $filePath; 
            $data->save();
        }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambah'); 
    }

    public function tampilkandata ($id) {   
        $data = Employee::findOrFail($id);
        $cabangs = Cabang::all();
        $managers = Manager::all();
        $skills = Skill::all();

        return view('tampildata', compact('data', 'cabangs', 'managers', 'skills'));
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

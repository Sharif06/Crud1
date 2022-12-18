<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
       $students = DB::table('students')->get();
        return view('form',['students'=>$students]);
    }


    public function create(Request $request)
    {

    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            'city'=>'required',
            'marks'=>'required',
        ]);
         DB::table('students')->insert ([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);
        return redirect(route('show'));
    }


    public function show()
    {
        $users = DB::table('students')->get();
        return view('show',['students'=>$users]);
    }


    public function edit($id)
    {
        $student = DB::table('students')->find($id);
        return view('editform',['student'=>$student]);
    }


    public function update(Request $request, $id)
    {
        DB::table('students')->where('id',$id)->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);
        return redirect(route('index'));
    }


    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect(route('index'));
    }
}

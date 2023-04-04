<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Game;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home() {
        $data = [
            'name'=>'dd',
            'age'=>18
        ];
        return view('welcome')->with($data);
    }

    public function profile(){
        $data1=[
            'username'=>'Ashraya'
        ];
        return view('profile')->with($data1);
    }

    public function create_game(){
        return view('create_game');
    }

    public function store_game(Request $request){
        $student = new Game();
        $student->Genre = $request->Genre;
        $student->name = $request->name;
        $student->description = $request->description;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/Gamephoto'.$filename);
        $student->image = $filename;
        $student->save();
        return view('welcome');
    }

    public function list(){

        Mail::to('ashraya.karki@sifal.deerwalk.edu.np')
            ->send(new ContactMail("Ashraya"));
        $user = Student::get();
        return view('List')->with('student',$user);
    }

    public function login(){
        $student = Game::get();
        return view('login');
    }
    public function signup(){
        return view('welcome');
    }
    public function edit($id){
        $student = student::where('id',$id)->first();
        return view('update')->with('student',$student);
    }
    public function update(Request $request){
        $student = Student::where('id',$request->id)->first();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->save();
        return redirect('/list');
    }
    public function delete($id){
        Student::where('id',$id)->delete();
        return redirect('/list');
    }

    /**
     * @param Request $request
     */
    public function register(Request $request){
        $student = new User();
        $student->Username = $request->Username;
        $student->Password = Hash::make( $request->Password);
        $student->Email = $request->Email;
    }
}

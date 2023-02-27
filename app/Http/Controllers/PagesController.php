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

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Game();
        $student->Genre = $request->Genre;
        $student->Game = $request->Game;
        $student->description = $request->Description;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/'.$filename);
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

    public function login1(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $student = Student::where('email', $email)->first();

        if ($student && $student->password === $password) {
            // login successful
            return redirect('/list');
        }

        // login failed
        return redirect()->back()->withErrors(['Invalid email or password']);
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

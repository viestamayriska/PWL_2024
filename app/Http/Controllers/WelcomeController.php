<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    public function hello(){
        return('Hello World');
        }
       public function greeting(){
        return view('blog.hello')
        ->with('name','Viesta')
        ->with('occupation','Astronaut');
        }
       
// public function hello() {
//  return "Hello World";
// }
// public function index() {
//     return "Selamat Datang";
//    }
//    public function about() {
//     return 'Viesta May Rizka, 2241760134';
//    }
//    public function articles($Id) {
//     return 'Halaman Ke'.$Id;
//    }
//    public function greeting(){
//     return view('blog.hello', ['name' => 'Viesta']);
//     }
   }
   



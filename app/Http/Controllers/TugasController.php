<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class TugasController extends Controller
{
 
	public function home(){
		return view('home');
	}
 
	public function pertemuan1(){
		return view('pertemuan1');
	}
 
	public function pertemuan2(){
		return view('pertemuan2');
	}
    public function pertemuan3(){
		return view('pertemuan3');
	}
    public function pertemuan5(){
		return view('pertemuan5');
	}
    public function pertemuan7(){
		return view('pertemuan7');
	}
 
}

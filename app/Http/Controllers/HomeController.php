<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use Validator;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
		$links = Links::all();
        return view('home', compact('links'));
    }
	
	public function index2()
    {
        return view('home2');
    }
	
	public function cadastrarLinks()
	{
		$a = 0;
		$links = Links::all();
		return view('cadastrarLinks', compact('a','links'));
	}
	
	public function novoLinks()
	{
		$a = 0;
		return view('novoLinks', compact('a'));
	}
	
	public function storeLinks(Request $request)
	{ 
		$input = $request->all();
		$validator = Validator::make($request->all(), [
			'descricao' => 'required|max:400',
			'link' 		=> 'required|max:1000'
		]);
		if ($validator->fails()) {
			$a = 0;
			return view('cadastrarLinks', compact('a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$links = Links::create($input);
			$a = 1;
			$validator = "Link Cadastrado com Sucesso!!";
			$links = Links::all();
			return view('cadastrarLinks', compact('a','links'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
			
		}
	}	
	
	public function atualizarLinks($id, Request $request)
	{  
		$links = Links::where('id',$id)->get();
		return view('updateLinks', compact('links'));
	}
	
	public function updateLinks($id, Request $request)
	{  
		$input = $request->all(); 
		$validator = Validator::make($request->all(), [
			'descricao' => 'required|max:400',
			'link' 		=> 'required|max:1000'
		]);
		if ($validator->fails()) {
			$a = 0;
			return view('cadastrarLinks', compact('a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$links = Links::find($id);
			$links->update($input);
			$a = 1;
			$validator = "Link Alterado com Sucesso!!";
			$links = Links::all();
			return view('cadastrarLinks', compact('a','links'))
				->withErrors($validator)
				->withInput(session()->flashInput($request->input()));
		}
	}
	
	public function excluirLinks($id, Request $request)
	{
		$links = Links::where('id',$id)->get();
		return view('excluirLinks', compact('links'));
	}
	
	public function deleteLinks($id, Request $request)
	{
		Links::find($id)->delete();
		$input = $request->all();
		$a = 1;
		$validator = "Link Excluído com Sucesso!!";
		$links = Links::all();
		return view('cadastrarLinks', compact('a','links'))
				->withErrors($validator)
				->withInput(session()->flashInput($request->input()));
	}
}
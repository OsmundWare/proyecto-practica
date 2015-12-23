<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Controllers\Controller;



use Request;
use App\Usuario;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuario = Usuario::all();
		return view('usuario.index', compact('usuario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUsuarioRequest $request)
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usuario  = Usuario::find($id);
		return view('usuario.show',compact('usuario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	   $usuario = Usuario::find($id);
	return view('usuario.edit',compact('usuario'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateUsuarioRequest $request)
	{
		$usuario = Usuario::find($id);
		$usuario->update($request->all());
		return redirect('usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$usuario = Usuario::find($id);
		$usuario->delete();
		return redirect('usuario');



	}

}

<?php

class HyperionController extends \BaseController {

	/**
	 * Displays main page
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return View::make('contact');
	}

	public function msgSent()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function subscribe()
	{
		$rules = array(
		'email' => 'required|email'
		);


		$validation = Validator::make(Input::all(), $rules);


		if ($validation->fails())
		{
			return Redirect::to('/')
			->withInput()
			->withErrors($validation);
		} 
		else
		{
			$subscriber = Subscriber::where('email','=', Input::get('email') )
			->first();
			
			if ($subscriber) 
			{
				return Redirect::to('/')
				->withInput() //with old input
				->with('email', $subscriber->email);
			}

			else
			{
				Subscriber::create(array('email' => Input::get('email')));
				return Redirect::to('/')
				->with('message', 'Thanks for signing up!');
			}
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		/* if(\Auth::user()->type==2 && \Auth::user()->loginas==2 && \Auth::user()->status==1)
		{
		return view('employer.index');
		}
		else if(\Auth::user()->type==3 && \Auth::user()->loginas==3 && \Auth::user()->status==1)
		{
			return view('agent.index');
		}
		else*/
			return view('home');
	}

}

<?php

// Resourceful Controller for the Contact Model
class ContactController extends \BaseController {

	protected $model;

	public function __construct(Contact $model) {
		$this->model = $model;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('tourism.contact');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		if (! $this->model->isValid($data)) {
			return Redirect::back()->withInput()->withErrors($this->model->errors);
		}

		$store = $this->model->create($data);

		if ($store) {
			return Redirect::back();
		}

		return Redirect::back()->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$contact = $this->model->find($id);
		$contact->delete();

		return Redirect::back();
	}

	/**
	 * Display list of resources in the admin side.
	 *
	 * @return Response
	 */
	public function admin_index(){
		$contacts = $this->model->all();
		return View::make('admin.viewContacts')->withContacts($contacts);
	}


}

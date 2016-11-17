<?php

// Resourceful Controller for the Itinerary Model
class ItineraryController extends \BaseController {

	protected $model;

	public function __construct(Itinerary $model) {
		$this->model = $model;
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
		$itinerary = $this->model->find($id);
		$itinerary->tour_package_id = Input::get('tour_package_id');
		$itinerary->day = Input::get('day');
		$itinerary->time = Input::get('time');
		$itinerary->event = Input::get('event');
		$itinerary->save();

		return Redirect::to('admin/pages/view_itineraries');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$itinerary = $this->model->find($id);
		$itinerary->delete();

		return Redirect::back();
	}

	/**
	 * Display list of resources in the admin side.
	 *
	 * @return Response
	 */
	public function admin_index() {
		$itineraries = $this->model->with('tour_package')->get();
		return View::make('admin.viewItineraries')->withItineraries($itineraries);
	}


}

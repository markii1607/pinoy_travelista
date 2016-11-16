<?php

class TourPackageController extends \BaseController {

	protected $model;

	public function __construct(TourPackage $model) {
		$this->model = $model;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$packages = $this->model->all();
  	return View::make('admin.tourPackages')->withPackages($packages);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

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

	public function getPackages() {
		$packages = $this->model->select(['id', 'name', 'location', 'description', 'filename'])->get();
		return View::make('tourism.index')->withPackages($packages);
	}

	public function details() {
		$id = Input::get('id');
		$package = $this->model->with(['tour_reviews', 'itineraries', 'sites', 'price_lists'])->find($id);

		$others = $this->model->where('id', '!=', $id)->get();

		return View::make('tourism.details')->withPackage($package)->withOthers($others);
	}

}

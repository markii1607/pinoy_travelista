<?php

// Resourceful Controller for the PriceList Model
class PriceListController extends \BaseController {

	protected $model;

	public function __construct(PriceList $model) {
		$this->model = $model;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$packs = TourPackage::all();
		return View::make('admin.addPriceList')->withPacks($packs);
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
    	Session::flash('message', 'Successfully added Price List');
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
		return View::make('admin.editPrice');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$price = $this->model->find($id);
		$price->tour_package_id = Input::get('tour_package_id');
		$price->name = Input::get('name');
		$price->save();

		return Redirect::to('admin/pages/price_list');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$price = $this->model->find($id);
		$price->delete();

		return Redirect::back();
	}

	/**
	 * Display list of resources in the admin side.
	 *
	 * @return Response
	 */
	public function admin_index() {
		$lists = $this->model->with('tour_package')->get();
		return View::make('admin.priceList')->withLists($lists);
	}


}

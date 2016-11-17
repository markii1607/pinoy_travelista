<?php

// Resourceful Controller for the TourPackage Model
class TourPackageController extends \BaseController {

	protected $model;

	public function __construct(TourPackage $model) {
		$this->model = $model;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('admin.addtourPackages');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $origName = "";
    $data = Input::all();

    // validation
    if (! $this->model->isValid($data)) {
      return Redirect::back()->withInput()->withErrors($this->model->errors);
    }

    // image upload
    if (Input::has('folder')) {
			if (Input::hasFile('file')) {
				$folder = Input::get('folder');
		    $file = Input::file('file');
		    $origName = $file->getClientOriginalName();
		    $type = $file->getMimeType();

		    // restrict mime type to jpg and png
		    if ($type == 'image/jpeg' || $type == 'image/png') {
		    	$url = "public/images/".$folder;
			    $imgUrl = "public/images/".$folder."/".$origName;

			    // upload to public/images directory
			    $file->move($url, $origName);
	 
			    // resize the picture
		    	$image = Image::make(sprintf($url."/%s", $origName))->resize(600, 400)->save();
		    }
	    }
		}

    $store = new TourPackage;
    $store->name = Input::get('name');
    $store->folder = Input::get('folder');
    $store->filename = $origName;
    $store->location = Input::get('location');
    $store->description = Input::get('description');
    $store->travel_time = Input::get('travel_time');
    $store->package_inclusion = Input::get('package_inclusion');
    $store->package_exclusion = Input::get('package_exclusion');
    $store->avail = Input::get('avail');
    $store->no_of_days = Input::get('no_of_days');
    $store->save();

    if ($store) {
    	Session::flash('message', 'Successfully added Tour Package');
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
		return View::make('admin.editPackages');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$package = $this->model->find($id);
		$package->tour_package_id = Input::get('tour_package_id');
		$package->name = Input::get('name');
		$package->save();

		return Redirect::to('admin/pages/tour_packages');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$package = $this->model->find($id);
		$package->delete();

		return Redirect::back();
	}

	/**
	 * Get list of tour packages.
	 *
	 * @return Response
	 */
	public function getPackages() {
		$packages = $this->model->select(['id', 'name', 'location', 'description', 'folder', 'filename'])->get();
		return View::make('tourism.index')->withPackages($packages);
	}

	/**
	 * Get the details about a package and the details about the other packages.
	 *
	 * @return Response
	 */
	public function details() {
		$id = Input::get('id');
		$package = $this->model->with(['tour_reviews', 'itineraries', 'sites', 'price_lists'])->find($id);
		$reviews = TourReview::whereTourPackageId($id)->orderBy('review', 'asc')->take(15)->get();

		$others = $this->model->where('id', '!=', $id)->get();

		return View::make('tourism.details')->withPackage($package)->withOthers($others)->withId($id)->withReviews($reviews);
	}

	/**
	 * Display list of resources in the admin side.
	 *
	 * @return Response
	 */
	public function admin_index() {
		$packages = $this->model->all();
  	return View::make('admin.tourPackages')->withPackages($packages);
	}

	/**
	 * Display list of packages.
	 *
	 * @return Response
	 */
	public function getTours() {
		$packages = $this->model->select(['id', 'name', 'location', 'description', 'folder', 'filename'])->get();
		return View::make('tourism.top')->withPackages($packages);
	}

}

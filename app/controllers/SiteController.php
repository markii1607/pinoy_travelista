<?php

// Resourceful Controller for the Site Model
class SiteController extends \BaseController {

	protected $model;

	public function __construct(Site $model) {
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
		return View::make('admin.addSites')->withPacks($packs);
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

    $store = new Site;
    $store->tour_package_id = Input::get('tour_package_id');
    $store->name = Input::get('name');
    $store->folder = Input::get('folder');
    $store->filename = $origName;
    $store->save();

    if ($store) {
    	Session::flash('message', 'Successfully Added Site');
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
		return View::make('admin.editSites');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$site = $this->model->find($id);
		$site->tour_package_id = Input::get('tour_package_id');
		$site->name = Input::get('name');
		$site->save();

		return Redirect::to('admin/pages/view_sites');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$site = $this->model->find($id);
		$site->delete();

		return Redirect::back();
	}

	/**
	 * Display list of resources in the admin side.
	 *
	 * @return Response
	 */
	public function admin_index() {
		$sites = $this->model->with('tour_package')->get();
		return View::make('admin.viewSites')->withSites($sites);
	}


}

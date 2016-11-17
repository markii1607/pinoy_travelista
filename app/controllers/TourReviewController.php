<?php

// Resourceful Controller for the TourReview Model
class TourReviewController extends \BaseController {

	protected $model;

	public function __construct(TourReview $model) {
		$this->model = $model;
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
		$review = $this->model->find($id);
		$review->delete();

		return Redirect::back();
	}

	/**
	 * Display list of resources in the admin side.
	 *
	 * @return Response
	 */
	public function admin_index() {
		$reviews = $this->model->with('tour_package')->get();
		return View::make('admin.tourReview')->withReviews($reviews);
	}


}

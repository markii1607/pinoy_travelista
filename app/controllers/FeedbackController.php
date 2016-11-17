<?php

// Resourceful Controller for the Feedback Model
class FeedbackController extends \BaseController {

	protected $model;

	public function __construct(Feedback $model) {
		$this->model = $model;
	}

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $feedbacks = $this->model->orderBy('name', 'asc')->take(15)->get();

    return View::make('tourism.testimonials')->withFeedbacks($feedbacks);
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
    $feedback = $this->model->find($id);
    $feedback->delete();

    return Redirect::back();
  }

  /**
   * Display list of resources in the admin side.
   *
   * @return Response
   */
	public function admin_index()
	{
		$feedbacks = $this->model->all();
		return View::make('admin.viewFeedback')->withFeedbacks($feedbacks);
	}

}

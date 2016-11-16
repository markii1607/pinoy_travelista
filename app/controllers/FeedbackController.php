<?php

class FeedbackController extends \BaseController {

	protected $model;

	public function __construct(Feedback $model) {
		$this->model = $model;
	}

	public function admin_index()
	{
		$feedbacks = $this->model->all();
		return View::make('admin.viewFeedback')->withFeedbacks($feedbacks);
	}

}

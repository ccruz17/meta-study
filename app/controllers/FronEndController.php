<?php

class FronEndController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

    protected $layout = 'front-end/default_layout/master';

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}

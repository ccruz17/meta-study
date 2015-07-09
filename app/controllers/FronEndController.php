<?php

class FronEndController extends Controller {

    protected $layout = 'front-end/default_layout/master';

    /**
     * Setup the language
     */
    function __construct(){
        //English will be the default language.
        $language = Session::get('locale','en');
        App::setLocale($language);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
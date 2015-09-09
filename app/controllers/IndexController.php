<?php

class IndexController extends FronEndController {

    public function index()
	{
        $this->layout->content = View::make('front-end/index');
	}

    public function language(){
        Session::set('locale', Input::get('locale'));
        return Redirect::back();
    }

}

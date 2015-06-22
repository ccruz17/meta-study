<?php

class IndexController extends FronEndController {

    public function index()
	{
        $this->layout->content = View::make('front-end/index');
	}

}

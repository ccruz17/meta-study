<?php

class SearchController extends FronEndController {

    public function search()
    {
        $this->layout->content = View::make('front-end/search');
    }

}
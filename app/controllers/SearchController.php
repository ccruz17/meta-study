<?php

class SearchController extends FronEndController {

    public function search()
    {
        $q = Input::get('q', '');
        $by = Input::get('by', 'all');
        $this->layout->content = View::make('front-end/search', array('q' => $q, 'by' => $by));
    }

}
<?php

class SearchController extends FronEndController {

    public function search(){

        $q = Input::get('q', '');
        $by = Input::get('by', 'all');
        $rows = Input::get('rows', '1');
        $page = Input::get('page', '1');

        $searchLib = new MySQL_Search_Library();
        $results = $searchLib->search($q, $by, $rows, $page);
        

        $this->layout->content = View::make('front-end/search',
            array(
                'Q' => $q,
                'BY' => $by,
            	'ROWS' => $rows,
            	'PAGE' => $page,
            	'RESULTS' => $results
            ));
    }

}
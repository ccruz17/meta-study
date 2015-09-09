<?php

class MySQL_Search_Library implements Interface_Search {

    public function search($q, $by, $rows, $page){
    	
        $register = new \Register();
        $q = $this->cleanQuery($q);

        if($by == 'title') {
        	return $register->select('*')
        	->whereRaw('MATCH(title) AGAINST("'.$q.'" IN BOOLEAN MODE)')
        	->paginate($rows);

        } else if ($by == 'author') {
            return $register->select('*')
                ->whereRaw('MATCH(authors) AGAINST("'.$q.'" IN BOOLEAN MODE)')
                ->paginate($rows);

        } else if ($by == 'category') {
            return $register->select('*')
                ->whereRaw('MATCH(categories) AGAINST("'.$q.'" IN BOOLEAN MODE)')
                ->paginate($rows);

        }else {
            return $register->select('*')
                ->whereRaw('MATCH(title, body, authors, categories) AGAINST("'.$q.'" IN BOOLEAN MODE)')
                ->paginate($rows);
        }
    }

    public function faceted($q, $by, $rows){
		
    }
    
    public function cleanQuery($q){
    	$replaceBlank = array (
    		',', '"', "'",
    	);
    	$return = str_replace($replaceBlank, '', $q);
    	
    	$replaceSpace = array (
    		'*', '+', '-'
    	);
    	$return = str_replace($replaceSpace, ' ', $q);
    	
    	$return = explode(' ', $return);
    	$return = implode(' +', $return);
    	$return = '+'.$return;
    	
    	return $return;
    }
    
}
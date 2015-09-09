<?php

interface Interface_Search {

    public function search($q, $by, $rows, $page);
    public function faceted($q, $by, $rows);

}
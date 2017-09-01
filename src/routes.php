<?php

Route::get(
    config('opensearch.xml_route', 'opensearch.xml'),
    'AHuggins\OpenSearch\Controllers\OpenSearchController@index'
);

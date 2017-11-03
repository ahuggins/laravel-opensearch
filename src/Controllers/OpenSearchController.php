<?php

namespace AHuggins\OpenSearch\Controllers;

use App\Http\Controllers\Controller;

class OpenSearchController extends Controller
{
    public function index()
    {
        return view('opensearch::opensearch', [
            'url' => config('app.url'),
            'name' => config('app.name'),
            'route' => config('opensearch.route', 'search'),
            'query_param' => config('opensearch.query_param', 'q'),
            'route_string' => config('app.url') . '/' . config('opensearch.search_route', 'search') . '?' . config('opensearch.query_param', 'q') . '={searchTerms}',
            'description' => config('opensearch.description'),
            'favicon' => config('opensearch.favicon')
        ]);
    }
}

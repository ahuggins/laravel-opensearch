# Laravel OpenSearch

You know when you go to Amazon.com or Google.com, you type in the domain, hit space, and the whole address bar becomes a "search field"? If you have wanted to add that to your site, then this package will make it super easy.

## Installation

This was made after release of 5.5, which is what it was built with, so I'll say it supports Laravel 5.5+, but really it probably is good on Laravel 5+.

`composer require ahuggins/laravel-opensearch`

> Note, since this was made with Laravel 5.5, it supports Package Auto-Discovery, so you should not need to manually add the ServiceProvider or Alias to `config/app.php`. But just in case for the sake of copy/pasta:

#### ServiceProvider

`AHuggins\OpenSearch\Providers\OpenSearchServiceProvider::class,`

#### Alias

`'OpenSearch' => AHuggins\OpenSearch\Facades\OpenSearchFacade::class,`

## Remaining Setup

There is a config file you might want to customize, to publish it, you need to do:

`php artisan vendor:publish`

This puts a `opensearch.php` file in your apps `config` folder.

#### Final Piece

In order for this to work, you need to add the following to the `<head>` section of your app layout or your base blade file:

`{{ OpenSearch::load() }}`

### TODO: Need to finish this up

* Create (or tie into) a basic search functionality
    * Or create a way to make it easy to customize to any app.




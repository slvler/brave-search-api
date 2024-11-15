# Brave Web Search API
[![tests](https://github.com/slvler/brave-search-api/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/brave-search-api)
[![Latest Stable Version](https://poser.pugx.org/slvler/brave-search-api/v)](https://packagist.org/packages/slvler/brave-search-api)
[![Latest Unstable Version](https://poser.pugx.org/slvler/brave-search-api/v/unstable)](https://packagist.org/packages/slvler/brave-search-api)
[![License](https://poser.pugx.org/slvler/brave-search-api/license)](https://packagist.org/packages/slvler/brave-search-api)
[![Total Downloads](https://poser.pugx.org/slvler/brave-search-api/downloads)](https://packagist.org/packages/slvler/brave-search-api)

### Introduction
Brave Web Search API is a REST API to query Brave Search and get back search results from the web. The following sections describe how to curate requests, including parameters and headers, to Brave Web Search API and get a JSON response back.
This package provides a convenient wrapper to the [Brave Web Search API](https://api.search.brave.com/app/documentation/web-search/get-started)  for Laravel applications.

### Requirements
- PHP 8.0+
- Laravel 10.x

### Installation
To install this package tou can use composer:
```bash
composer require slvler/brave-search-api
```

### Usage
- First, you should extract the config/brave.php file to the config folder.
```bash
php artisan vendor:publish --tag=brave
```
- First of all we'll add the API key and API Url of the service we're using to our .env file of our project. If you don't have an account yet on api.search.brave.com, you should create one. Once you have an account you can copy your API key from the dashboard page and put it into you .env file.
```php
BRAVE_BASE_URL="https://api.search.brave.com"
BRAVE_API_KEY=
```

#### Web text search
- You can use it to search on brave api:
```php
use Slvler\Brave\Facades\Brave;

Brave::web(['q' => "bitcoin"])->result();
```

### Testing
```bash
composer test
```

### Credits
- [slvler](https://github.com/slvler)

### License
The MIT License (MIT). Please see [License File](https://github.com/slvler/brave-search-api/blob/main/LICENSE.md) for more information.

### Contributing
You're very welcome to contribute.
Please see [CONTRIBUTING](https://github.com/slvler/brave-search-api/blob/main/CONTRIBUTING.md) for details.

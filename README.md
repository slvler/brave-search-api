# Brave Web Search API

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

#### Web text search
```php
Brave::web(['q' => "bitcoin"])->result();
```

### Credits

- [slvler](https://github.com/slvler)

### License

The MIT License (MIT). Please see [License File](https://github.com/slvler/brave-search-api/blob/main/LICENSE.md) for more information.

### Contributing
You're very welcome to contribute.
Please see [CONTRIBUTING](https://github.com/slvler/brave-search-api/blob/main/CONTRIBUTING.md) for details.

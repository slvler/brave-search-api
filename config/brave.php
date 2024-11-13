<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default definitions
    |--------------------------------------------------------------------------
    |
    | Default http address, secret key
    |
    */
    'client' => [
        'base_url' => env('BRAVE_BASE_URL'),
        'version' => env('BRAVE_API_VERSION'),
        'api_key' => env('BRAVE_API_KEY')
    ],

    /*
    |--------------------------------------------------------------------------
    | Country
    |--------------------------------------------------------------------------
    |
    | The search query country, where the results come from.
    | The country string is limited to 2 character country codes of supported countries.
    | For a list of supported values, see Country Codes.
    | https://api.search.brave.com/app/documentation/web-search/codes#country-codes
    |
    */

    'country' => 'US',

    /*
    |--------------------------------------------------------------------------
    | Search Language
    |--------------------------------------------------------------------------
    |
    | The search language preference.
    | The 2 or more character language code for which the search results are provided.
    | For a list of possible values, see Language Codes.
    | https://api.search.brave.com/app/documentation/web-search/codes#language-codes
    |
    */

    'search_lang' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Language preferred
    |--------------------------------------------------------------------------
    |
    | User interface language preferred in response.
    | Usually of the format ‘<language_code>-<country_code>’.
    | For more, see RFC 9110. For a list of supported values, see UI Language Codes.
    */

    'ui_lang' => 'en-US',

    /*
    |--------------------------------------------------------------------------
    | Count
    |--------------------------------------------------------------------------
    |
    | The number of search results returned in response.
    | The maximum is 20. The actual number delivered may be less than requested.
    | Combine this parameter with offset to paginate search results.
    */

    'count' => 20,

    /*
    |--------------------------------------------------------------------------
    | The zero based offset
    |--------------------------------------------------------------------------
    |
    | The zero based offset that indicates number of search results per page (count) to skip before returning the result. The maximum is 9.
    | The actual number delivered may be less than requested based on the query.
    | In order to paginate results use this parameter together with count.
    | For example, if your user interface displays 20 search results per page, set count to 20 and offset to 0 to show the first page of results.
    | To get subsequent pages, increment offset by 1 (e.g. 0, 1, 2). The results may overlap across multiple pages.
    */

    'offset' => 0,

    /*
    |--------------------------------------------------------------------------
    | Filters search results for adult content.
    |--------------------------------------------------------------------------
    |
    | Filters search results for adult content.
    | The following values are supported:
    | off: No filtering is done.
    | moderate: Filters explicit content, like images and videos, but allows adult domains in the search results.
    | strict: Drops all adult content from search results.
    */

    'safesearch' => 'moderate',

    /*
    |--------------------------------------------------------------------------
    | Filters search results by when they were discovered.
    |--------------------------------------------------------------------------
    |
    | The following values are supported:
    | - pd: Discovered within the last 24 hours.
    | - pw: Discovered within the last 7 Days.
    | - pm: Discovered within the last 31 Days.
    | - py: Discovered within the last 365 Days…
    | - YYYY-MM-DDtoYYYY-MM-DD: timeframe is also supported by specifying the date range e.g. 2022-04-01to2022-07-30.
    */

    'freshness' => null,

    /*
    |--------------------------------------------------------------------------
    | Whether display
    |--------------------------------------------------------------------------
    |
    | Whether display strings (e.g. result snippets) should include decoration markers (e.g. highlighting characters).
    */

    'text_decorations' => true,

    /*
    |--------------------------------------------------------------------------
    | Whether to spellcheck
    |--------------------------------------------------------------------------
    |
    | Whether to spellcheck provided query.
    | If the spellchecker is enabled, the modified query is always used for search.
    | The modified query can be found in altered key from the query response model.
    */

    'spellcheck' => true,

    /*
    |--------------------------------------------------------------------------
    | Search response
    |--------------------------------------------------------------------------
    |
    | A comma delimited string of result types to include in the search response.
    | Not specifying this parameter will return back all result types in search response where data is available and a plan with the corresponding option is subscribed.
    | The response always includes query and type to identify any query modifications and response type respectively.
    | Available result filter values are: - discussions - faq - infobox - news - query - summarizer - videos - web - locations
    | Example result filter param result_filter=discussions, videos returns only discussions, and videos responses.
    | Another example where only location results are required, set the result_filter param to result_filter=locations.
    */

    'result_filter' => null,

    /*
    |--------------------------------------------------------------------------
    | Brave’s search index
    |--------------------------------------------------------------------------
    |
    | Goggles act as a custom re-ranking on top of Brave’s search index.
    | For more details, refer to the Goggles repository.
    */

    'goggles_id' => null,

    /*
    |--------------------------------------------------------------------------
    | The measurement units
    |--------------------------------------------------------------------------
    |
    | If not provided, units are derived from search country.
    | Possible values are: - metric: The standardized measurement system - imperial: The British Imperial system of units.
    */

    'units' => null,

    /*
    |--------------------------------------------------------------------------
    | A snippet is an excerpt
    |--------------------------------------------------------------------------
    |
    | A snippet is an excerpt from a page you get as a result of the query, and extra_snippets allow you to get up to 5 additional, alternative excerpts.
    | Only available under Free AI, Base AI, Pro AI, Base Data, Pro Data and Custom plans.
    */

    'extra_snippets' => null,

    /*
    |--------------------------------------------------------------------------
    | This parameter enables
    |--------------------------------------------------------------------------
    |
    | This parameter enables summary key generation in web search results.
    | This is required for summarizer to be enabled.
    */

    'summary' => null,
];

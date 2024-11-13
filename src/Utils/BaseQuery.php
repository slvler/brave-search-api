<?php

declare(strict_types=1);

namespace Slvler\Brave\Utils;

class BaseQuery
{
    /** @var array */
    protected array $properties = [];
    protected array $response = [];

    public function __construct(array $properties = [])
    {
        $this->properties = $properties;
    }
    public function setProperty(): self
    {
        $arr = [
            'q',
            'country',
            'search_lang',
            'ui_lang',
            'count',
            'offset',
            'safesearch',
            'freshness',
            'text_decorations',
            'spellcheck',
            'result_filter',
            'goggles_id',
            'units',
            'extra_snippets',
            'summary'
        ];

        foreach ($arr as $item){
            if(array_key_exists($item, $this->properties)){
                $this->response[$item] = $this->properties[$item];
            }else{
                $this->response[$item] = config('brave.'.$item);
            }
        }
        return $this;
    }

    public function toResponse(): string
    {
        return http_build_query($this->response);
    }
}

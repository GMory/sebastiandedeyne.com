<?php

namespace App\Content;

class BlogrollLink
{
    public $name, $url, $category;

    public static function create(array $data): self
    {
        $link = new self();

        $link->name = $data['name'];
        $link->url = $data['url'];
        $link->category = $data['category'];

        return $link;
    }
}

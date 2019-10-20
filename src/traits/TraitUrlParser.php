<?php

namespace Src\Traits;

trait TraitUrlParser 
{
    // Splits the URL into an array
    public function parseUrl(): array 
    {
        $url = '/';

        if (isset($_GET['route'])) {
            $url .= $_GET['route'];
        }
        
        $url = array_values(array_filter(explode('/', $url)));

        return $url;
    }
}
<?php

namespace Lwxtd\Tag;

use Illuminate\Support\Facades\Facade;

class TagFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'lwxtd-tag';
    }
}


?>


<?php

use Illuminate\Support\Facades\Request;

function setPageTitle($title)
{
    view()->share('pageTitle', $title);
}

if(!function_exists('route_is')){
    function route_is($route=null){
        if(Request::routeIs($route)){
            return true;
        }else{
            return false;
        }
    }
}





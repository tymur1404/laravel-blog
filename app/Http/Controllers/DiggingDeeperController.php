<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class DiggingDeeperController extends Controller
{
    public function collections()
    {
        $result = [];

        $eloquentCollection = BlogPost::withTrashed()->get();

        //dd(__METHOD__, $eloquentCollection, $eloquentCollection->toArray());

        //получаем коллекцию
        $collection = collect($eloquentCollection->toArray());

        dd(
            get_class($eloquentCollection),
            get_class($collection),
            $collection
        );
    }
}

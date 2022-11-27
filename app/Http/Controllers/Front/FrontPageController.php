<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\Version;
use App\Models\Presentation;
use Psy\VarDumper\Presenter;

class FrontPageController extends Controller
{
    public function index()
    {
        return view("front.frontpage.index");
    }

    public function categories()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view("front.frontpage.categories", compact('categories'));
    }

    public function events($categoryId)
    {
        $events = Event::where('category_id', $categoryId)->orderBy('name', 'asc')->get();

        return view("front.frontpage.events", compact('categoryId', 'events'));
    }

    public function versions($categoryId, $eventId)
    {
        $versions = Version::where('event_id', $eventId)->orderBy('name', 'asc')->get();

        return view("front.frontpage.versions", compact('categoryId', 'eventId', 'versions'));
    }

    public function presentations($categoryId, $eventId, $versionId)
    {
        $presentations = Presentation::where('version_id', $versionId)->orderBy('name', 'asc')->get();

        return view("front.frontpage.presentations", compact('categoryId', 'eventId', 'versionId', 'presentations'));
    }
}

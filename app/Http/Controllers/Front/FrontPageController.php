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

    public function events(Category $category)
    {
        $events = Event::where('category_id', $category->id)->orderBy('name', 'asc')->get();

        return view("front.frontpage.events", compact('category', 'events'));
    }

    public function versions(Category $category, Event $event)
    {
        $versions = Version::where('event_id', $event->id)->orderBy('name', 'asc')->get();

        return view("front.frontpage.versions", compact('category', 'event', 'versions'));
    }

    public function presentations(Category $category, Event $event, Version $version)
    {
        $presentations = Presentation::where('version_id', $version->id)->orderBy('name', 'asc')->get();

        return view("front.frontpage.presentations", compact('category', 'event', 'version', 'presentations'));
    }

    public function about()
    {
        return view("front.frontpage.about");
    }
}

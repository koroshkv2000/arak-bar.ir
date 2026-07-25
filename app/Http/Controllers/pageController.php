<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class pageController extends Controller
{
    public function SiteMapXML()
    {
        $routes = Route::getRoutes();
        $urls = [];

        foreach ($routes as $route) {
            if (array_key_exists('view', $route->defaults)) {
                $viewName = $route->defaults['view'];
                $absolutePath = view($viewName)->getPath();
                $urls[] = [
                    'loc'     => url($route->uri()),
                    'lastmod' => \Carbon\Carbon::createFromTimestamp(filemtime($absolutePath))->toAtomString(),
                ];
            }
        }

        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>');

        foreach ($urls as $item) {
            $url = $xml->addChild('url');
            $url->addChild('loc', $item['loc']);
            $url->addChild('lastmod', $item['lastmod']);
        }

        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

}

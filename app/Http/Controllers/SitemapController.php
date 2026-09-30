<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\PictureCategory;

class SitemapController extends Controller
{
    public function index()
    {
        $entries = [];

        // Static pages: [english route, bulgarian route]
        $pages = [
            ['welcome', 'welcome-bg', 1.0],
            ['gallery', 'gallery-bg', 0.9],
            ['about', 'about-bg', 0.7],
            ['contact', 'contact-bg', 0.5],
        ];
        foreach ($pages as [$en, $bg, $priority]) {
            $entries[] = [
                'en' => route($en),
                'bg' => route($bg),
                'lastmod' => null,
                'priority' => $priority,
                'image' => null,
            ];
        }

        foreach (PictureCategory::whereNotNull('slug')->get() as $category) {
            $entries[] = [
                'en' => route('gallery', $category->slug),
                'bg' => route('gallery-bg', $category->slug),
                'lastmod' => $category->updated_at,
                'priority' => 0.8,
                'image' => null,
            ];
        }

        foreach (Artwork::whereNotNull('slug')->get() as $artwork) {
            $entries[] = [
                'en' => route('single-artwork', $artwork),
                'bg' => route('single-artwork-bg', $artwork),
                'lastmod' => $artwork->updated_at,
                'priority' => 0.6,
                'image' => $artwork->image ? asset('images/artwork/'.rawurlencode($artwork->image)) : null,
            ];
        }

        return response()
            ->view('sitemap', ['entries' => $entries])
            ->header('Content-Type', 'application/xml');
    }
}

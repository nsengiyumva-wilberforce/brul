<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\News; // Import your News model

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate a sitemap for the website';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about'))
            ->add(Url::create('/products'))
            ->add(Url::create('/services'))
            ->add(Url::create('/contact-us'))
            ->add(Url::create(route('blog'))); // Add the blog route

        // Add news detail URLs dynamically
        $newsItems = News::all();
        foreach ($newsItems as $newsItem) {
            $sitemap->add(Url::create(route('blog.details', ['id' => $newsItem->id])));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully at public/sitemap.xml');
    }
}
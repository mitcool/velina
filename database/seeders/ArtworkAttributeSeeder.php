<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Illuminate\Database\Seeder;

class ArtworkAttributeSeeder extends Seeder
{
    /**
     * Give every artwork without attributes a dummy alt/title built from its name.
     */
    public function run(): void
    {
        $artworks = Artwork::with('category')->doesntHave('attribute')->get();

        foreach ($artworks as $artwork) {
            $name = $artwork->name ?: $artwork->name_en;
            $nameEn = $artwork->name_en ?: $artwork->name;
            $category = $artwork->category?->name;
            $categoryEn = $artwork->category?->name_en;

            $artwork->attribute()->create([
                'alt' => trim("Картина „{$name}“ от Велина Гребенска".($category ? ", {$category}" : '')),
                'alt_en' => trim("Painting \"{$nameEn}\" by Velina Grebenska".($categoryEn ? ", {$categoryEn}" : '')),
                'title' => $name,
                'title_en' => $nameEn,
            ]);
        }

        $this->command?->info("Seeded attributes for {$artworks->count()} artworks.");
    }
}

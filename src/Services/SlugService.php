<?php

namespace Nihir\Services;

use Illuminate\Support\Str;

class SlugService
{
    public function generateUniqueSlug($model, $title)
    {
        $baseSlug = Str::slug($title);
        $uniqueSlug = $baseSlug;
        $counter = 1;

        $modelClass = get_class($model);

        while ($modelClass::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}

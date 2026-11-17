<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    //
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'status',
    ];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function deleteMediaImage()
    {
        $this->clearMediaCollection('post_cover');
    }

    public function getCoverFullUrl()
    {
        if (is_null($this->getFirstMedia('post_cover'))) {
            return asset('front/assets/images/news/article-default.png');
        }

        return $this->getFirstMedia('post_cover')->getFullUrl();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('post_cover')
            ->useFallbackUrl('/front/assets/images/news/article-default.png')
            ->useFallbackPath(public_path('/front/assets/images/news/article-default.png'))
            ->singleFile();
    }
}

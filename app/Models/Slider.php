<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Slider extends Model implements HasMedia
{
    use HasTranslations;
    use SoftDeletes;
    use InteractsWithMedia;



    public $translatable = ['title', 'description'];

    protected $guarded = ['img'];


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('slider');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('slider-thumb')
              ->width(1680)
              ->height(815);

        $this->addMediaConversion('card-thumb')
        ->width(633)
        ->height(470);

        $this->addMediaConversion('small-thumb')
        ->width(300)
        ->height(100);
    }

}

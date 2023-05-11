<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Gallery extends Model implements HasMedia
{
    use HasTranslations;
    use SoftDeletes;
    // add this part if class will have image
    use InteractsWithMedia;
    use HasImage;
    // add this part if class will have image


    public $translatable = ['title', 'description'];

    protected $guarded = ['img'];


    protected function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }


    public function getCurrentClassBasename()
    {
        return Str::of(self::class)->classBasename()->lower()->value;
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('gallery');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('big-thumb')
            ->width(1680)
            ->height(815);

        $this->addMediaConversion('card-thumb')
            ->width(633)
            ->height(470);

        $this->addMediaConversion('small-thumb')
            ->width(300)
            ->height(100);
    }
// add this part if class will have image



}

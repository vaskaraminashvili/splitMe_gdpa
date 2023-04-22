<?php

namespace App\Traits;

trait HasImage
{
    public function image()
    {
        return $this->getFirstMediaUrl($this->getCurrentClassBasename());
    }

    public function bigThumb()
    {
        return $this->getFirstMediaUrl($this->getCurrentClassBasename(), 'big-thumb');
    }

    public function cardThumb()
    {
        return $this->getFirstMediaUrl($this->getCurrentClassBasename(), 'card-thumb');
    }

    public function smallThumb()
    {
        return $this->getFirstMediaUrl($this->getCurrentClassBasename(), 'small-thumb');
    }

    public function removeImage()
    {
        return $this->getFirstMedia($this->getCurrentClassBasename())->delete();
    }

    public function removeAllImages()
    {
        return $this->clearMediaCollection($this->getCurrentClassBasename());
    }
}

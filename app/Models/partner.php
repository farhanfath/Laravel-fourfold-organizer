<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'thumbnail',
        'content',
        'link',
        'post_as',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            //jika pada thumbnail terdapat file baru dan file lama !== null, maka hapus file thumbnail lama
            if($model->isDirty('Thumbnail') && ($model->getOriginal('thumbnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}

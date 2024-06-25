<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class program extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['course_id', 'name', 'description', 'image', 'slug', 'status'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name') // Menggunakan 'name' untuk generate slug, sesuaikan dengan kebutuhan aplikasi Anda
            ->saveSlugsTo('slug'); // Pastikan field 'slug' sesuai dengan yang didefinisikan di migration
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function fees()
    {
        return $this->hasMany(ProgramFee::class);
    }
}

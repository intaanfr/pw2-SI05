<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres=[
        
        [
            'no' => 1,
            'genre' => 'Horror',
            'deskripsi' => 'example',
            
        ],
        [
            'no' => 2,
            'genre' => 'Comedy',
            'deskripsi' => 'example',
            
        ],
        [
            'no' => 3,
            'genre' => 'Thriller',
            'deskripsi' => 'example',
            
        ],
        [
            'no' => 4,
            'genre' => 'Action',
            'deskripsi' => 'example',
            
        ],
        [
            'no' => 5,
            'genre' => 'Horror',
            'deskripsi' => 'example',
            
        ],
];
public function getAllGenres() 
 {
    return $this->genres;
 }
}
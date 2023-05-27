<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $reviews=[
        
        [
            'no' => 1,
            'film' => 'The Medium',
            'user' => 'Dinda Amalia',
            'rating' => '8.5',
            'review' => 'Beberapa hal tampaknya akan mudah terlewat atau terabaikan apabila penonton tak fokus ataumengalihkan perhatiannya di bagian alur lambat tersebut.',
            'tanggal' => '25/07/2020',    
        ],
        [
            'no' => 2,
            'film' => 'Ngeri Ngeri Sedap',
            'user' => 'Galuh Ratna',
            'rating' => '8.8',
            'review' => 'Film lengkap ada tangis,bahagia,dan comedy nya juga.Suka banget pokoknya.',
            'tanggal' => '12/03/22',
            
        ],
        [
            'no' => 3,
            'film' => 'Train to Busan',
            'user' => 'Restu Adil',
            'rating' => '7.2',
            'review' => 'Film nya seru dan juga menegangkan. Ada Lee Dong Wook.',
            'tanggal' => '13/10/2020',
            
        ],
        [
            'no' => 4,
            'film' => 'Infinity War',
            'user' => 'Salatin syah',
            'rating' => '8.7',
            'review' => 'Film nya seru dan juga menegangkan. Ada Lee Dong Wook.',
            'tanggal' => '15/10/2021',
            
            
        ],
        [
            'no' => 5,
            'film' => 'KKN di Desa penari',
            'user' => 'Rizka Azizy',
            'rating' => '7.2',
            'review' => 'Film sangat seru karena di adaptasi dari thread dari twitter yang sangat viral pada masanya',
            'tanggal' => '11/11/2021',
        ],
];
public function getAllReviews() 
 {
    return $this->reviews;
 }
}


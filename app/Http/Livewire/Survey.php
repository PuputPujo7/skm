<?php

namespace App\Http\Livewire;

use App\Models\HasilRating;
use App\Models\Pemohons;
use App\Models\Ratings;
use Filament\Forms;
use Livewire\Component;
use Yepsua\Filament\Forms\Components\Rating;

class Survey extends Component implements Forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;

    protected $ratings;
    protected $formsSurvey = [];
    public 
    // $nama, 
    $review,
        $rating = [], $lastReview;

    public function mount(){
        // $this->nama = $nama;
        $this->pemohon = Pemohons::all('id');
        //dd($this->lastReview);
        //dd($this->questions[0]);

        //dd($this->formsSurvey);
    }



    public function submit(){
        //dd($this->rating);
        $pemohon = Pemohons::all();
        $summary = [];

        $this->ratings = Ratings::all();
        foreach ($this->ratings as $key => $rating){
            array_push($summary,
                [
                    'pemohon_id' => $pemohon->id,
                    'rating_id' => $rating->id,
                    'amount' => $this->rating[$key]
                ]
            );
            $hasil = HasilRating::create($summary[$key]);
        }
        $avg = array_sum(array_column($summary, 'amount')) / count($summary);
        //dd(array_sum(array_column($summary, 'amount')));
        //dd($avg);
        //dd($summary);
        $pemohon->review = $this->review;
        $pemohon->review_star = $avg;
        $pemohon->update();

        //dd($summary);

        return redirect('/');
    }

    public function render()
    {
        $this->ratings = Ratings::all();
        $ratings = $this->ratings;
        return view('livewire.survey', compact('ratings'))->layout('layouts.app1') ;
    }
}
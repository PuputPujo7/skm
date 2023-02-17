<?php

namespace App\Http\Livewire;

use App\Models\HasilRating;
use App\Models\HasilSurvey;
use App\Models\SurveySkm;
use App\Models\Skm;
use App\Models\Rating;
use Livewire\Component;
// use Yepsua\Filament\Forms\Components\Rating;

class Survey extends Component 
// implements Forms\Contracts\HasForms
{
    public function render()
    {
        $this->ratings = Rating::all();
        return view('livewire.survey')->extends('layouts.app1');
    }
    public $ratings;
    public function mount()
    {
        $ratings=$this->ratings;
    }

    // use Forms\Concerns\InteractsWithForms;

    // protected $ratings;
    protected $formsSurvey = [];
    public $tiket, $review,
        $rating = [], $lastReview;


    public $pemohon_id;
    public $pertanyaan_id;
    public $amount;
    // public $review;

    public function submit(){

        foreach ($this->ratings as $key => $rating){
               ([
                'pemohon_id' => $rating->id,
                'pertanyaan_id' => $rating->id,
                'amount' => $this->rating
            ]
               );
                    
            }
        $rating = HasilRating::create([
            // 'pemohon_id',
            // 'pertanyaan_id',
            // 'amount',
            'review'
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');
        // Cobas::create($data);
        // $data=$this->toast;
        // return Redirect()->route('coba')->with('success','Data tamu sudah disimpan');
        // return Redirect()->route('coba');
        return redirect('/');

        // dd($this->amount);
        // $rating = Rating::where('nomor_tiket', $this->tiket)->first();
        // $summary = [];

        // $data = $this->validate([
        //     'pemohon_id',
        //     'rating_id',
        //     'amount',
        //     'review',
        // ]);
  
        // HasilRating::create($data);

        // $this->ratings = HasilRating::all();
        // foreach ($this->ratings as $key => $rating){
        //     array_push($summary,
        //         [
        //             'pemohon_id' => $rating->id,
        //             'pertanyaan_id' => $rating->id,
        //             'amount' => $this->rating[$key]
        //         ]
        //     );
            // HasilRating::create($rating);
            // $hasil = HasilSurvey::create($summary[$key]);
        // }
        // $avg = array_sum(array_column($summary, 'amount')) / count($summary);
        // $rating->review = $this->review;
        // $rating->review_star = $avg;
        // $rating->update();

        //dd($summary);

        // return redirect('/');
    }

}


<?php

namespace App\Http\Livewire;

use App\Models\HasilSurvey;
use App\Models\SurveySkm;
use App\Models\Skm;
use App\Models\Pertanyaans;
use Livewire\Component;
use Yepsua\Filament\Forms\Components\Rating;

class Survey extends Component 
// implements Forms\Contracts\HasForms
{
    public function render()
    {
        $this->pertanyaans = Pertanyaans::all();
        return view('livewire.survey');
    }
    public $pertanyaans;
    public function mount()
    {
        $pertanyaans=$this->pertanyaans;
    }

    // use Forms\Concerns\InteractsWithForms;

    // protected $pertanyaans;
    protected $formsSurvey = [];
    public $tiket, $review,
        $rating = [], $lastReview;



    public function submit(){
        //dd($this->rating);
        // $lakonePandu = LakonePandu::where('nomor_tiket', $this->tiket)->first();
        // $summary = [];

        $this->pertanyaans = SurveySkm::all();
        foreach ($this->pertanyaans as $key => $pertanyaan){
            array_push($summary,
                [
                    // 'lakone_pandu_id' => $lakonePandu->id,
                    'survey_lakone_pandu_id' => $pertanyaan->id,
                    'amount' => $this->rating[$key]
                ]
            );
            $hasil = HasilSurvey::create($summary[$key]);
        }
        // $avg = array_sum(array_column($summary, 'amount')) / count($summary);
        // $lakonePandu->review = $this->review;
        // $lakonePandu->review_star = $avg;
        // $lakonePandu->update();

        //dd($summary);

        return redirect('/survey');
    }

}


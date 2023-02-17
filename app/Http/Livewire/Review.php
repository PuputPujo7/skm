<?php

namespace App\Http\Livewire;

use App\Models\DataSkm;
use App\Models\SiLakonePandu\HasilSurvey;
use App\Models\SiLakonePandu\LakonePandu;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Review extends Component
{

    public $reviews, $stars;

    public function mount(){
        $this->reviews = DataSkm::whereNotNull('review_star')->take(5)->get();
        $this->stars = DataSkm::whereNotNull('review_star')
            ->select(
            DB::raw('avg(review_star) as avg_star'),
            DB::raw('count(*) as count_layanan'),
            DB::raw('count(CASE WHEN review_star < 2 THEN 1 END) as star1'),
            DB::raw('count(CASE WHEN review_star >= 2 AND review_star < 3 THEN 1 END) as star2'),
            DB::raw('count(CASE WHEN review_star >= 3 AND review_star < 4 THEN 1 END) as star3'),
            DB::raw('count(CASE WHEN review_star >= 4 AND review_star < 5 THEN 1 END) as star4'),
            DB::raw('count(CASE WHEN review_star = 5 THEN 1 END) as star5'),
        )->first();
        //dd($this->reviews->meetingId);
        //dd($this->stars);
        //dd($this->reviews);
    }

    public function render()
    {
        return view('livewire.review')
            ->layout('layouts.app1');
    }
}
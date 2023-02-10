<?php

namespace App\Models;

use App\Http\Livewire\Star;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yepsua\Filament\Forms\Components\Star;

class Rating extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ='data_skms';

    protected function getFormSchema(): array
    {
        return [
            ...
            Star::make('star')
                ->disabled()
        ];
    }
}

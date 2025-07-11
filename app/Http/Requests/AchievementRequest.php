<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class AchievementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    


    public function rules(): array
    {
        return [
            'date'         => 'required|date',
            'achievement'  => 'required|string|max:255',
            'level'        => 'required|string|max:100',
            'organizer'    => 'required|string|max:255',
            'winner'       => 'required|string|max:100',
        ];
    }
}

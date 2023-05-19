<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "thumb" => "required|url|max:255",
            "title" => "required|max:50",
            "price" => "required|max:10",
            "series" => "required|max:70",
            "sale_date" => "required|max:10",
            "description" => "nullable|max:65535",
            "type" => "required|max:50"
        ];
    }

    public function messages() {
        return [
            'thumb.required' => "Url dell'immagine richiesta",
            'thumb.url' => "L'url dell'immagine deve essere valida, esempio: https://www.laravel.com",
            'thumb.max' => "L'url dell'immagine deve essere al massimo di 255 caratteri",
            'title.required' => "Il titolo è richiesto",
            'title.max' => "Il titolo deve essere al massimo di 50 caratteri",
            'price.required' => "Il prezzo è richiesto",
            'price.max' => "Il prezzo deve essere al massimo di 10 caratteri",
            'series.required' => "La serie è richiesta",
            'series.max' => "La serie deve essere al massimo di 70 caratteri",
            'sale_date.required' => "La data di rilascio è richiesta",
            'sale_date.max' => "Il campo data di rilascio deve essere al massimo di 10 caratteri",
            'description.max' => "La descrizione deve essere lunga al massimo 65535 caratteri",
            'type.required' => "Il tipo è richiesto",
            'type.max' => "Il campo tipo deve essere al massimo di 50 caratteri",
        ];
    }
}

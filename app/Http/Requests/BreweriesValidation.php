<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreweriesValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   
        return [
            'title' => 'required|unique:breweries|max:255',
            'description' => 'required|min:50|max:255',
        ];
    }

    //redirigir al mismo sitio si algo va mal

    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous() . '#formValido';
    }
}

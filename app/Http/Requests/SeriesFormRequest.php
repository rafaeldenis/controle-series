<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'nome'=>'required|min:3',
            'ep_por_temporada'=>'required|min:1',
            'qtd_temporadas'=>'required|min:1' 
        ];
    }
    public function messages ()
    {
        //:attribute procutra o campo que esta retornando o erro
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute precisa ter pelo menos três caracteres'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AndroidPopulerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'nama_android' => 'required',
            'owner' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nama_android.required' => 'Nama Android tidak boleh kosong!',
            'owner.required' => 'Owner tidak boleh kosong!',
        ];
    }
}

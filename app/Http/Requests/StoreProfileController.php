<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed activity
 */
class StoreProfileController extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'first_name'  => 'required|string|min:3|max:30',
            'last_name'   => 'required|string|min:3|max:50',
            'description' => 'required|min:5|max:150'
        ];

        return $rules;
    }
}

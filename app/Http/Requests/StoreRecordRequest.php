<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return $this->header("X-TOKEN") == '@fTK=3isPb0kEcgf_VTNZMyYSsFpOYY$KPtOXWoXom25aBSjhgsotLhDZGaU9pWf';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'type'      => 'required',
            'longitude' => 'required',
            'latitude'  => 'required',
        ];
    }
}

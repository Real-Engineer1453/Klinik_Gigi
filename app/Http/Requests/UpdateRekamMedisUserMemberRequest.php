<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRekamMedisUserMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('user_officer')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "anamnesa" =>  "required|max:255",
            "riwayat_alergi" =>  "required|max:255",
            "tindakan" =>  "required|max:255",
            "terapi_obat" => "required|max:255"
        ];
    }
}

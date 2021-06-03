<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserMemberRequest extends FormRequest
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
            "nama" => "required|min:2|max:100",
            "nomor_cm" => 'required|unique:users_member,nomor_cm,'.$this->id,
            "tanggal_lahir" => "required|date",
            "alamat" => "required|max:255",
            "nomor_hp" => "required|digits_between:10,16"
        ];
    }
}

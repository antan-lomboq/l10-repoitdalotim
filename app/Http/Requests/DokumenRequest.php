<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_dokumen' => 'required|min:5|max:60',
            'owner' => 'required',
            'author' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required|min:10',
            'kategori_id' => 'required',
            'file_upload.*' => 'nullable|file|mimes:png,jpg,jpeg,pdf,doc,docx|max:10000|hashName()',
        ];
    }
}

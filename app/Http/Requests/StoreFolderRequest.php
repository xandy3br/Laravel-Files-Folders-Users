<?php

namespace App\Http\Requests;

use App\Folder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFolderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('folder_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}

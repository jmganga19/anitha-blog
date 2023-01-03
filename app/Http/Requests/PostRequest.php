<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
      $rules= [
          'title'=>[
            'required',
            'string',
            'max:200',
          ],
          'slug'=>[
            'required',
            'string',
            'max:200',
          ],
          'description'=>[
            'required',
          ],
          'image'=>[
            'nullable',
            'mimes:jpg,png,jpeg',

          ],
          'meta_title'=>[
            'required',
            'string',
            'max:200',
          ],
          'meta_description'=>[
            'required',
            'string',
          ],
          'meta_keyword'=>[
            'required',
            'string',
          ],
          'status'=>[
          ]

        ];
        return $rules;
    }
}
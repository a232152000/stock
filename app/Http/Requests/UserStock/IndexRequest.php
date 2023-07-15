<?php

namespace App\Http\Requests\UserStock;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'search' => ['string'],
            'page' => ['integer', 'min:1'],
            'perPage' => ['integer', 'min:1'],
            'sort' => ['string'],
            'direction' => ['string', Rule::in(['asc', 'desc'])],
        ];
    }
}

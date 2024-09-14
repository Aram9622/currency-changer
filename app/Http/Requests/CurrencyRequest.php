<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "price" => "required",
            "currency_from_id" => "required|exists:currencies,id|different:currency_to_id",
            "currency_to_id" => "required|exists:currencies,id|different:currency_from_id",
        ];
    }

    public function messages()
    {
        return [
            "currency_from_id.different" => "The currency from field and currency to must be different.",
            "currency_to_id.different" => "The currency from field and currency to must be different.",
            "currency_from_id.exists" => "The currency from field is invalid.",
            "currency_to_id.exists" => "The currency to field is invalid.",
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255',
            'start_date' => 'date|nullable',
            'end_date' => 'date|nullable',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:255',
            'status' => 'string|max:255',
            'payment_method' => 'string|max:255',
            'payment_status' => 'string|max:255',
            'payment_url' => 'nullable|string|max:255',
            'total_price' => 'nullable|numeric',
            'item_id' => 'required|integer|exists:items,id',
            'user_id' => 'required|integer|exists:users,id'
        ];
    }
}

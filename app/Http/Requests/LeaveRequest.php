<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LeaveRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'leave_date' => [
                'required',
                'date',
                Rule::unique('leaves')->where(function ($query) {
                    return $query->where('user_id', $this->user_id);
                }),
            ],
            'duration' => 'required|numeric',
            'reason' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Containers\Feedback\DTO\FeedbackDTO;
use Illuminate\Foundation\Http\FormRequest;

class feedbackRequest extends FormRequest
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
        return [
            'name' => 'required|min:4|max:100',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required|min:3|max:1000',
        ];
    }

    public function getDto(): FeedbackDTO
    {
        return new FeedbackDTO(
            $this->get('name'),
            $this->get('phone'),
            $this->get('message'));
    }
}

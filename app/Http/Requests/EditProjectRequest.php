<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'nullable|string|in:in progress,completed,on hold,cancelled',
            'budget' => 'nullable|numeric|min:0',
            'repository' => 'nullable|url',
            'tech_stack' => 'nullable|string',
            'tech_stack.*' => 'string|max:255', // Validazione per ciascun elemento dello stack tecnologico
            'project_manager' => 'nullable|string|max:255',
            'team_members' => 'nullable|string',
            'team_members.*' => 'string|max:255', // Validazione per ciascun membro del team
        ];
    }
}

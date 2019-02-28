<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteTaslRquest extends FormRequest
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
            'project_id' => 'required|integer',
            'task_id' => 'required|integer',
        ];
    }


    protected function prepareForValidation()
    {
        $this->replace([
            'project_id' => (int)$this->route('project_id'),
            'task_id' => (int)$this->route('task_id'),
        ]);
    }
}

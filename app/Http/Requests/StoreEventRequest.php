<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class StoreEventRequest extends FormRequest
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
            'eventName' => 'required|min:20',
            'bandName' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'ticketPrice' => 'required',
            'portfolio' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'eventName.required' => 'Enter Event Name',
            'eventName.min'=>'Enter at at least 20 character',
            'bandName.required' => 'Enter Band Name',
            'startDate.required' => 'Enter Start Date',
            'endDate.required' => 'Enter End Date',
            'ticketPrice.required' => 'Enter Ticket Prices',
            'portfolio.required' => 'Enter Portfolio',
            'status.required' => 'Enter Status'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if(strtotime($this->get('startDate'))>strtotime(Carbon::now())){
                $validator->errors()->add('startDate', 'Start date must after present day');
            }
            if(strtotime($this->get('endDate'))<strtotime($this->get('startDate'))){
                $validator->errors()->add('endDate', 'End date must after startDate');
            }
            $status = $this->get('status');
            if( $status != 1 && $status != 2 && $status != 3 && $status !=0){
                $validator->errors()->add('status', 'Status must have 0 or 1 or 2 or 3');
            }
        });
    }
}

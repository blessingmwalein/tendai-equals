<?php

namespace App\Http\Livewire;

use App\Models\CompanyInformation;
use Livewire\Component;

class RegisterCompanyForm extends Component
{
    public $website_name;
    public $company_name;
    public $phone_number;
    public $contact_person;
    public $email;
    public $industry;
    public $quality_assurance;
    public $terms;

    protected $rules =[
        'company_name' => 'required',
        'phone_number' => 'required',
        'contact_person' => 'required',
        'email' => 'required|email',
        'industry' => 'required',

    ];

    public function mount()
    {
        $this->website_name = request()->query('website_name');
    }

    public function render()
    {
        return view('livewire.register-company-form');
    }

    public function submit()
    {
        $this->validate();
        CompanyInformation::create([
            'company_name' => $this->company_name,
            'website_name' => $this->website_name,
            'phone_number' => $this->phone_number,
            'contact_person' => $this->contact_person,
            'email' => $this->email,
            'industry' => $this->industry,
            'quality_assurance' => $this->quality_assurance,
            'terms' => $this->terms,
        ]);

        //flash message

        session()->flash('message', 'Company Information successfully saved.');

        //clear form
        $this->company_name = '';
        $this->phone_number = '';
        $this->contact_person = '';
        $this->email = '';
        $this->industry = '';
        $this->quality_assurance = '';
        $this->terms = '';
        $this->website_name = '';


    }
}

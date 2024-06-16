<?php

declare(strict_types=1);

namespace App\Livewire\Frontend;

use App\Enums\Age;
use App\Enums\Gender;
use App\Livewire\Forms\RegistrationForm;
use App\Models\Registration;
use Livewire\Component;

class Index extends Component
{
    public RegistrationForm $form;

    //    public function mount(Registration $registration): void
    //    {
    //        $this->form->setRegistration($registration);
    //    }

    public function save(): void
    {
        $this->form->store();
    }

    public function render()
    {
        $gender = Gender::toArray();
        $age = Age::toArray();
        $data = [
            'gender' => $gender,
            'age' => $age,
        ];

        return view('livewire.frontend.index', $data);
    }
}

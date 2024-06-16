<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Registration;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegistrationForm extends Form
{
    public ?Registration $registration;

    #[Validate('required')]
    public string $name = '';

    #[Validate('required')]
    public string $email = '';

    #[Validate('nullable')]
    public string $age = '';

    #[Validate('nullable')]
    public string $gender = '';

    #[Validate('nullable')]
    public string $message = '';

    public function setRegistration(Registration $registration): void
    {
        $this->registration = $registration;
        $this->name = $registration->name;
        $this->email = $registration->email;
        $this->age = $registration->age;
        $this->gender = $registration->gender;
        $this->message = $registration->message;
    }

    public function store(): void
    {
        $this->validate();

        Registration::create($this->all());
    }

    public function update(): void
    {
        $this->registration->update(
            $this->all(),
        );
    }
}

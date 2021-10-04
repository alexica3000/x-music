<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    protected $listeners = ['showNotification' => 'showNotification'];

    public bool $hide = true;
    public string $message = '';

    public function render()
    {
        return view('livewire.components.notification');
    }

    public function showNotification(string $message): void
    {
        $this->hide = false;
        $this->message = $message;
    }

    public function hideNotification(): void
    {
        $this->hide = true;
    }
}

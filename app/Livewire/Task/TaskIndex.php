<?php

namespace App\Livewire\Task;

use App\Livewire\TaskForm;
use Livewire\Component;

class TaskIndex extends Component
{

    public $title, $slug, $descritpion, $status, $priority, $deadline;
    public function render()
    {
        return view('livewire.task.task-index')->layout('layouts.app');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'descritpion' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'deadline' => 'required',
        ]);
        auth()->user()->tasks()->create($this->only([
            'title','slug','descritpion','status','priority','deadline'
        ]));

        $this->reset();
    }
}

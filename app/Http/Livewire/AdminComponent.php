<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AdminComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public  $status = [
        ['id' => 1, "name" => "active"],
        ['id' => 2, "name" => "inactive"],
        ['id' => 3, "name" => "pending"]

    ];
}

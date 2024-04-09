<?php

namespace Spatie\Permission\Events;

use Illuminate\Queue\SerializesModels;

class RoleChangeEvent
{
    use SerializesModels;

    public $model;
    public $roles;
    public $currentRoles;

    public function __construct($model, $roles, $currentRoles)
    {
        $this->model = $model;
        $this->roles = $roles;
        $this->currentRoles = $currentRoles;
    }
}
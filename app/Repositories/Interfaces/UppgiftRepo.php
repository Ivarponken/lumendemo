<?php

namespace App\Repositories\Interfaces;

use App\Models\Uppgift;

interface UppgiftRepo
{
    public function all(): array;
    public function get(string $id): ?Uppgift;
    public function add(Uppgift $uppgift): void;
    public function update(Uppgift $uppgift): void;
    public function delete(string $id): void;
}

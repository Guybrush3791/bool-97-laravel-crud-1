<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ResMainController;

Route :: get("/", [MainController :: class, "index"])
    -> name('pasta.index');

Route :: get('/pastas/create', [MainController :: class, 'create'])
    -> name('pastas.create');
Route :: post('/pastas', [MainController :: class, 'store'])
    -> name('pastas.store');

Route :: get("/pastas/{id}", [MainController :: class, "show"])
    -> name('pastas.show');

// Route :: resource('pastas', ResMainController :: class);

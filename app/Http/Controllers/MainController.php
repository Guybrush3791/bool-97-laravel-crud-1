<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pasta;

class MainController extends Controller
{

    public function index() {

        $pastas = Pasta :: all();

        return view('pasta.index', compact('pastas'));
    }

    public function show($id) {

        $pasta = Pasta :: findOrFail($id);

        return view('pasta.show', compact('pasta'));
    }

    public function create() {

        return view('pasta.create');
    }

    public function store(Request $request) {

        $data = $request -> all();

        $pasta = Pasta :: create([
            "src" => $data["src"],
            "titolo" => $data["titolo"],
            "tipo" => $data["tipo"],
            "cottura" => $data["cottura"],
            "peso" => $data["peso"],
            "descrizione" => $data["descrizione"]
        ]);

        return redirect() -> route("pastas.show", $pasta -> id);
        // return redirect() -> route("pasta.index");
    }
}

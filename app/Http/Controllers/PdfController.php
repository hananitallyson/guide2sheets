<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function uploudPDF(Request $request)
    {
        $data = $this->addModifier($request->except('_token'));

        return view('uploudPdf', compact('data'));
    }

    public function createModifier($valor)
{
    $modificador = floor(($valor - 10) / 2);

    if ($modificador >= 0) {
        return "+" . $modificador;
    }

    return $modificador;
}

    public function addModifier($data){
        $newData = [
            "ForcaMod" => $this->createModifier($data["Forca"]),
            "DestrezaMod" => $this->createModifier($data["Destreza"]),
            "InteligenciaMod" => $this->createModifier($data["Inteligencia"]),
            "SabedoriaMod" => $this->createModifier($data["Sabedoria"]),
            "ConstituicaoMod" => $this->createModifier($data["Constituicao"]),
            "CarismaMod" => $this->createModifier($data["Carisma"])
        ];

        return array_merge($data, $newData);
    }
}

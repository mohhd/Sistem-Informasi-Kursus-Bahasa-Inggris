<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;

class ApiController extends Controller
{
    public function editnilai(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        if($request->pk == "9"){
            $siswa->pelajaran_r()->updateExistingPivot($request->pk, [
                'nilai' => $request->value,
                'status' => "Lulus TOEFL"
                ]);
        }
        $siswa->pelajaran_r()->updateExistingPivot($request->pk, [
            'nilai' => $request->value,
            'status' => "Lulus"
            ]);
            
    }
}

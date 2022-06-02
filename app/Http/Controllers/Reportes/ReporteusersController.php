<?php

namespace App\Http\Controllers\Reportes;

use App\Models\User;
use App\Models\persona;
use App\Models\producto;
use App\Models\catProducto;
use App\Models\clasProducto;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function users()

    {
        $vusers = User::where('estado',1)->paginate();
        return view('admin\reportes\users' , compact('vusers'));
    }
}

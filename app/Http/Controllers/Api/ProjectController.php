<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
//controller adibito a recuperare i dati e restituirmeli come JSON da poterli poi sfruttare peril front-end
class ProjectController extends Controller
{

    public function index()
    {
        // Recupera tutti i progetti dal database
        $projects = Project::all();

        // Restituisce i progetti in formato JSON
        return response()->json([
            'success' => true,
            'data' => $projects,
        ]);
    }
}

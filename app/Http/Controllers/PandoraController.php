<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use App\Models\Users;

class PandoraController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        //$task = new Task;
        
        $users = Users::getAll();

        $response['status'] = 'ok';


        // if (!App::environment('production')) {
        //     $response['laravel_version'] = Application::VERSION;
        //     //$response['php_version'] = PHP_VERSION;
        //     $response['pandora_version'] = Config::get('pandora.version');
        // }

        return Response::json($users);
    }
}

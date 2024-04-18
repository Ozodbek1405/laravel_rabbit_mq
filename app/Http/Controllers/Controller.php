<?php

namespace App\Http\Controllers;

use App\Services\RabbitMQService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function message(Request $request)
    {
        $message = $request->message;
        $mqService = new RabbitMQService();
        $mqService->publish($message);
        return view('welcome');
    }

}

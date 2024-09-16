<?php

namespace App\Http\Controllers;

use App\Services\RabbitMQService;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @throws Exception
     */
    public function message(Request $request): RedirectResponse
    {
        $message = $request->message;
        $mqService = new RabbitMQService();
        $mqService->publish($message);
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(title="Micelios API",
 *  version="1.0",
 *  description="API de comunicación micelios backend"
 * )

 * @OA\Server(url="")
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

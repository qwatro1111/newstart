<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//для версии 5.1 и ранее:
//use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    /**
     * Обновление профиля пользователя.
     *
     * @param  Request  $request
     * @return Response
     */
    public function updateProfile(Request $request)
    {
        if ($request->user()) {
            // $request->user() возвращает экземпляр аутентифицированного пользователя...
        }
    }
}
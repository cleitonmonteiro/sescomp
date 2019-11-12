<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckControllerProxy extends Controller
{
    public function checkActivity(Request $request, CheckController $checkController) {
        $data = $request->all();

        $validator = Validator::make($data, [
            'user_email' => ['required', 'string', 'max:255'],
            'activity_id' => ['required', 'integer'],
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validator Error'])->setStatusCode(Response::HTTP_BAD_REQUEST);
        }

        return $checkController->checkActivity($data['user_email'], $data['activity_id']);
    }
}

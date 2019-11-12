<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    public function checkActivity($user_email, $activity_id) {
        
        $user = User::where('email', $user_email)->first();
        $act_user = DB::table('activity_user')
            ->where('user_id', $user->id)
            ->where('activity_id', $activity_id)->update(['checked' => true]);
        return response()->json(['message' => 'Successfully']);
    }
}

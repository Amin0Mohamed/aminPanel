<?php
use \Illuminate\Http\Request;

function ResponseJson($state,$message,$data=null)
{
    $response = [
        'state'=>$state,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response);
}

function is_active(string $routeName)
{
    return null !== request()->segment(2) && request()->segment(2)== $routeName ? 'activ' : '';
}



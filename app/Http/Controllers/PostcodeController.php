<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use Illuminate\Support\Facades\Redirect;

class PostcodeController extends Controller
{
    public function lookup(Request $request)
    {
        $postData = $request->input();
        // URL
        $apiURL = "https://api.postcodes.io/postcodes/" . $postData["postcode"];

        // Headers
        $headers = [];

        $response = Http::withHeaders($headers)->get($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        if ($statusCode == 200) {
            $data = $responseBody["result"];

            return view("result")->with("information", $data);
        } else {
            Session::flash("error", "invalid postcode");
            return view("index")->with("msg", "Invalid Postcode");
        }
    }

    public function autoComplete(Request $request)
    {
        $postData = $request->input();

        // URL
        $apiURL = "https://api.postcodes.io/postcodes/".$postData["term"]."/autocomplete";

        // Headers
        $headers = [];

        $response = Http::withHeaders($headers)->get($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        if ($statusCode == 200) {
            
            return response()->json([
                "value" => $responseBody["result"],
                "status" => $statusCode,
            ]);
        }else{

            return response()->json([
                "value" => 'error',
                "status" => $statusCode,
            ]);
        }
    }
}

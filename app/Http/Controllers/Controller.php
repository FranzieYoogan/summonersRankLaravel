<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

        public function getRank(Request $request) {



            $summoner = $request->input('summoner');
            $region = $request->input('region');
            $api_key = "/?api_key=RGAPI-411992ff-a251-4bc0-a6d5-ec82f28df2ac";

            if(isset($summoner) && isset($region)) {
                $url = "https://$region.api.riotgames.com/lol/summoner/v4/summoners/by-name/" . $summoner . $api_key;

                $response = Http::get($url);
        
                
                if(isset($response)) {

                    
               
                    $response2 = "https://$region.api.riotgames.com/lol/league/v4/entries/by-summoner/" . $response['id'] . $api_key;
                    
                    $data = Http::get($response2);

                    $decoded = json_decode($data);

                

                    return view('summoner',['decoded' => $decoded[0]]);
                }
            } else {

                return view('welcome');


            }

      

            


        


        }

}

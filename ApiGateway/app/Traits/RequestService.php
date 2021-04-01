<?php 
namespace App\Traits;
 

use GuzzleHttp\Client;
use Illuminate\Http\Response;

trait RequestService {
    public function request($method, $requestUrl, $formParams = []) {
        $client = new Client([
            'base_uri' => $this->baseUri
        ]);

        if(isset($this->secret)) {
            $headers['Authorization'] = $this->secret;
        }

        $response = $client->request($method, $requestUrl, [
            'form_params' => $formParams,
            'headers' => $headers
        ]);

        return $response->getBody()->getContents();
    }
}
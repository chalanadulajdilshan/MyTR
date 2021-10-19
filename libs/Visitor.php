<?php

class Visitor {

    public function new_visitor() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $url = 'http://ip-api.com/json/' . $ip;
        $contents = file_get_contents($url);
        if ($contents !== false && $contents != NULL) {
            $data = json_decode($contents, true);
            if ($data['status'] == "success") {
                $result = $this->db->insert(array('table' => 'visitor', 'data' => [
                        'ip' => $ip,
                        'page' => $_SERVER['REQUEST_URI'],
                        'countryCode' => $data['countryCode'],
                        'region' => $data['region'],
                        'regionName' => $data['regionName'],
                        'city' => $data['city'],
                        'zip' => $data['zip'],
                        'country' => $data['country'],
                        'lat' => $data['lat'],
                        'lon' => $data['lon'],
                        'timezone' => $data['timezone'],
                        'isp' => $data['isp'],
                        'as_org' => $data['as']
                ]));
            } else {
                $result = $this->db->insert(array('table' => 'visitor', 'data' => ['ip' => $ip]));


                /*
                  {
                  "query": "43.250.242.34",
                  "status": "success",
                  "country": "Sri Lanka",
                  "countryCode": "LK",
                  "region": "1",
                  "regionName": "Western Province",
                  "city": "Kaduwela",
                  "zip": "10640",
                  "lat": 6.9339,
                  "lon": 79.982,
                  "timezone": "Asia/Colombo",
                  "isp": "Mobitel Pvt Ltd",
                  "org": "Mobitel Pvt Ltd",
                  "as": "AS45356 Mobitel Pvt Ltd"
                  }

                 */
                
            }
            
        }







        return $result;
    }

}

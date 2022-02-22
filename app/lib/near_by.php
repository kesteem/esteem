<?php


namespace app\lib;


use app\resources\v;
use Exception;

class near_by
{


    const earthRadiusInKm = 6371.01,
        earthRadiusInMeters = 6371000,
        earthRadiusInMiles = 3958.8,
        unitKM = 'Km',
        unitMiles = 'Miles',
        unitMeter = 'Meters';


    static function latLonPair($lat,$lon){

            return ((90 - $lat) * (180 - $lon)/7 );
    }

    static function getBound($lat,$lon,$dist){

        $top =   self::getNearByInKM($lat,$lon,$dist,0)[v::latitude];
       $left =   self::getNearByInKM($lat,$lon,$dist,90)[v::longitude];
        $right =   self::getNearByInKM($lat,$lon,$dist,-90)[v::longitude];
        $bottom =   self::getNearByInKM($lat,$lon,$dist,-180)[v::latitude];

        return[
           v::latitude=>$lat,
           v::longitude=>$lon,
            v::distance=>$dist,
          v::top => $top ,
            v::left => $left ,
            v::right => $right ,
           v::bottom => $bottom
        ];
    }

   static function distance($latitudeFrom, $longitudeFrom,
                                $latitudeTo,  $longitudeTo,$unit = self::unitKM)
    {
        $long1 = deg2rad($longitudeFrom);
        $long2 = deg2rad($longitudeTo);
        $lat1 = deg2rad($latitudeFrom);
        $lat2 = deg2rad($latitudeTo);

        //Haversine Formula
        $dlong = $long2 - $long1;
        $dlati = $lat2 - $lat1;

        $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);
        $res = 2 * asin(sqrt($val));

        if ( self::unitKM == $unit ){
            $distance = $res * self::earthRadiusInKm;
        }elseif (self::unitMeter == $unit){

            $distance = $res * self::earthRadiusInMeters;
        }elseif (self::unitMiles == $unit){

          $distance =   $res * self::earthRadiusInMiles;
        }else{

            throw new Exception('Unit of distance not allowed');
        }
        return round($distance).$unit;
    }


    static function toRad($deg){
        return $deg * pi()/180;
    }


    static function toDeg($rad){
            return $rad *180/ pi();
    }

   private static function run(float $lat,float $lon,int $distance,int$bearing){

        $lat = self::toRad($lat);
        $lon = self::toRad($lon);
        $distance = $distance/6371.01; //Kilometer
        $bearing = self::toRad($bearing);
        $lat2 = asin(sin($lat) * cos($distance) +
            cos($lat) * sin($distance) * cos($bearing) );
        $lon2 = $lon + atan2(sin($bearing) * sin($distance) * cos($lat),
                cos($distance) - sin($lat) * sin($lat2));
        $lon2= fmod(($lon2 + 3*pi()),(2*pi())) - pi();
        return ['latitude'=>self::toDeg($lat2), 'longitude'=>self::toDeg($lon2)];
    }

    static function getNearByInKM($lat,$lon,$distance,$bearing){

        $km = 6371.01;
      return  self::run($lat,$lon,$distance,$bearing);
    }


}
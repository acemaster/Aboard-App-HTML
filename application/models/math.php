<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Math extends CI_Model
{
  public function _construct()
  {

    parent::_construct();
  }

  public function getdist($clat,$clongt,$flat,$flongt)
  {
       $radius=6371;
       $a1=deg2rad($clat);
       $a2=deg2rad($flat);
       $b1=deg2rad($flat-$clat);
       $b2=deg2rad($flongt-$clongt);
       $d=sin($b1/2)*sin($b1/2)+cos($a1)*cos($a2)*sin($b2/2)*sin($b2/2);
       $c=2*atan2(sqrt($d), sqrt(1-$d));
       return $radius*$c;


  }


}
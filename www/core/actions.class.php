<?php
class Actions{
  static function getUserData($mile){
    return array(
      'name'=>'User Very',
      'last_name'=>'Special',
      'mile'=>$mile
    );
  }
  static function getPromoData($list=1){
    $array = array();
    if($list==1){
      return array(
        ['name'=>'Punta Cana','cost'=>'52,000','img'=>'punta-cana.png'],
        ['name'=>'Aracajú','cost'=>'35,000','img'=>'aracaju.png'],
        ['name'=>'Porto Seguro','cost'=>'35,000','img'=>'porto-seguro.png'],
        ['name'=>'Itaparica','cost'=>'31,000','img'=>'itaparica.png'],
        ['name'=>'Rio de Janeiro','cost'=>'29,000','img'=>'rio.png'],
        ['name'=>'Florianopolis','cost'=>'21,000','img'=>'florianopolis.png'],
        ['name'=>'JBL T400','cost'=>'17,000','img'=>'jbl-phone.png'],
        ['name'=>'JBL Go 2','cost'=>'11,000','img'=>'jbl-go.png'],
        ['name'=>'Ilhabela','cost'=>'9,000','img'=>'ilhabela.png'],
        ['name'=>'Vale Compra Shell','cost'=>'7,000','img'=>'shell-power.png'],
      );
    }
  }
}
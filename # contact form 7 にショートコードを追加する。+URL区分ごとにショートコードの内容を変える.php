# contact form 7 にショートコードを追加する。+URL区分ごとにショートコードの内容を変えるfunction
<?php
function the_contact_title(){
    if( $_SERVER['REQUEST_URI']=="/atago/contact/" || $_SERVER['REQUEST_URI']=="/atago/request/"):
      $contact_title = "愛宕";
    endif;
    if( $_SERVER['REQUEST_URI']=="/hongo/contact/" || $_SERVER['REQUEST_URI']=="/hongo/request/"):
      $contact_title = "本郷";
    endif;
    if( $_SERVER['REQUEST_URI']=="/hongodai/contact/" || $_SERVER['REQUEST_URI']=="/hongodai/request/"):
      $contact_title = "本郷台";
    endif;
    if( $_SERVER['REQUEST_URI']=="/aobadai/contact/" || $_SERVER['REQUEST_URI']=="/aobadai/request/"):
      $contact_title = "青葉台";
    endif;
    if( $_SERVER['REQUEST_URI']=="/tamagawa/contact/" || $_SERVER['REQUEST_URI']=="/tamagawa/request/"):
      $contact_title = "多摩川桜並木";
    endif;
    if( $_SERVER['REQUEST_URI']=="/nerima/contact/" || $_SERVER['REQUEST_URI']=="/nerima/request/"):
      $contact_title = "練馬";
    endif;
    if( $_SERVER['REQUEST_URI']=="/kuji/contact/" || $_SERVER['REQUEST_URI']=="/kuji/request/"):
      $contact_title = "久地";
    endif;
    if( $_SERVER['REQUEST_URI']=="/shonantakatori/contact/" || $_SERVER['REQUEST_URI']=="/shonantakatori/request/"):
      $contact_title = "湘南鷹取";
    endif;
    if( $_SERVER['REQUEST_URI']=="/izumichuo/contact/" || $_SERVER['REQUEST_URI']=="/izumichuo/request/"):
      $contact_title = "泉中央";
    endif;
    if( $_SERVER['REQUEST_URI']=="/makomanai/contact/" || $_SERVER['REQUEST_URI']=="/makomanai/request/"):
      $contact_title = "真駒内";
    endif;
    if( $_SERVER['REQUEST_URI']=="/shiroishi/contact/" || $_SERVER['REQUEST_URI']=="/shiroishi/request/"):
      $contact_title = "白石南郷";
    endif;
    if( $_SERVER['REQUEST_URI']=="/hokudaimae/contact/" || $_SERVER['REQUEST_URI']=="/hokudaimae/request/"):
      $contact_title = "北大前";
    endif;
    if( $_SERVER['REQUEST_URI']=="/toyohira/contact/" || $_SERVER['REQUEST_URI']=="/toyohira/request/"):
      $contact_title = "豊平";
    endif;

    return $contact_title;
}
function the_contact_url(){
    if( $_SERVER['REQUEST_URI']=="/atago/contact/" || $_SERVER['REQUEST_URI']=="/atago/request/"):
      $contact_title = "atago";
    endif;
    if( $_SERVER['REQUEST_URI']=="/hongo/contact/" || $_SERVER['REQUEST_URI']=="/hongo/request/"):
      $contact_title = "hongo";
    endif;
    if( $_SERVER['REQUEST_URI']=="/hongodai/contact/" || $_SERVER['REQUEST_URI']=="/hongodai/request/"):
      $contact_title = "hongodai";
    endif;
    if( $_SERVER['REQUEST_URI']=="/aobadai/contact/" || $_SERVER['REQUEST_URI']=="/aobadai/request/"):
      $contact_title = "aobadai";
    endif;
    if( $_SERVER['REQUEST_URI']=="/tamagawa/contact/" || $_SERVER['REQUEST_URI']=="/tamagawa/request/"):
      $contact_title = "tamagawa";
    endif;
    if( $_SERVER['REQUEST_URI']=="/nerima/contact/" || $_SERVER['REQUEST_URI']=="/nerima/request/"):
      $contact_title = "nerima";
    endif;
    if( $_SERVER['REQUEST_URI']=="/kuji/contact/" || $_SERVER['REQUEST_URI']=="/kuji/request/"):
      $contact_title = "kuji";
    endif;
    if( $_SERVER['REQUEST_URI']=="/shonantakatori/contact/" || $_SERVER['REQUEST_URI']=="/shonantakatori/request/"):
      $contact_title = "shonantakatori";
    endif;
    if( $_SERVER['REQUEST_URI']=="/izumichuo/contact/" || $_SERVER['REQUEST_URI']=="/izumichuo/request/"):
      $contact_title = "izumichuo";
    endif;
    if( $_SERVER['REQUEST_URI']=="/makomanai/contact/" || $_SERVER['REQUEST_URI']=="/makomanai/request/"):
      $contact_title = "makomanai";
    endif;
    if( $_SERVER['REQUEST_URI']=="/shiroishi/contact/" || $_SERVER['REQUEST_URI']=="/shiroishi/request/"):
      $contact_title = "shiroishi";
    endif;
    if( $_SERVER['REQUEST_URI']=="/hokudaimae/contact/" || $_SERVER['REQUEST_URI']=="/hokudaimae/request/"):
      $contact_title = "hokudaimae";
    endif;
    if( $_SERVER['REQUEST_URI']=="/toyohira/contact/" || $_SERVER['REQUEST_URI']=="/toyohira/request/"):
      $contact_title = "toyohira";
    endif;

    return $contact_url;
}

wpcf7_add_shortcode("contact_title","the_contact_title",true);
wpcf7_add_shortcode("contact_url","the_contact_url",true);

 ?>
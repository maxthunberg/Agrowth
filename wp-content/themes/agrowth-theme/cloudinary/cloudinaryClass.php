<?php

// 
// function CloudinaryImage() {
//   $base = 'https://res.cloudinary.com/agrowth/image/upload/';
//   $filename = $image['filename'];
//   $params = '/'.'q_10'.'/';
//   $output = $base.$params.$filename;
//   return $output;
//
// }
// class CloudinaryImage
// {
//     public $id;
//
//     private $ext = 'jpg';
//
//     private $_baseURL = 'https://res.cloudinary.com/agrowth/image/upload/';
//     protected $_attr;
//
//     private function _compile_attr($toString)
//     {
//         $attr = array();
//         foreach($this->_attr as $n => $v)
//         {
//             if( $v )
//             {
//                 $attr[substr($n,0,1)] = $v;
//             }
//         }
//
//         if( $toString )
//         {
//             $str = array();
//             foreach( $attr as $n => $v )
//             {
//                 $str[] = sprintf("%s_%s", $n, $v);
//             }
//
//             return implode(",", $str);
//         } else {
//             return $attr;
//         }
//     }
//
//     public function __toString()
//     {
//         return sprintf(
//             "%s%s/%s.%s",
//             $this->_baseURL,
//             $this->_compile_attr(true),
//             $this->id,
//             $this->ext
//         );
//     }
//     public function __construct()
//     {
//         $this->_attr = array(
//             'gravity' => 'south',
//             'quality' => 70,
//             'craft'   => 'crop',
//             'height','width','y','x',
//             'background','effect'
//         );
//         foreach($this->_attr as $n => $v)
//         {
//             if( $n && !is_int($n) )
//             {
//                 $this->_attr[$n] = $v;
//             } else {
//                 $this->_attr[$v] = "";
//                 unset($this->_attr[$n]);
//             }
//         }
//
//         return $this;
//     }
//     public static function set()
//     {
//         return new self();
//     }
//
//     public function set_id($id)
//     {
//         $this->id = $id;
//
//         return $this;
//     }
//     public function set_by_url($url)
//     {
//         $this->id = ($url)
//             ? str_replace(array(
//                 $this->_baseURL,
//                 str_replace("https://","http://",$this->_baseURL),
//                 '.png','.jpeg','.jpg','.gif'
//             ), '', $url)
//             : null;
//
//         return $this;
//     }
//
//     /**
//      * Set file extension
//      * @param $ext
//      * @return $this
//      */
//     public function set_extension($ext) {
//         $this->ext = $ext;
//         return $this;
//     }
//     public function set_attr($name, $value)
//     {
//         if( isset($this->_attr[$name]) )
//         {
//             $this->_attr[$name] = $value;
//         }
//
//         return $this;
//     }
// }

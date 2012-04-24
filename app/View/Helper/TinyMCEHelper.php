<?php
class TinyMceHelper extends HtmlHelper {
    var $helpers=array('Js');
    var $defaults=array(
        'theme'=>'simple',
        'mode'=>'textareas',
        'convert_urls'=>false,
        );
    function beforeRender(){
        $this->script('tiny_mce.js', array('inline' => false));
    }
    function init($options=false){
    if(!$options){
        $options=$this->defaults;
    }
    $code='tinyMCE.init('.json_encode($options).');';
    return $this->Js->buffer($code);
    }
}
?>
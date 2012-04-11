<?php
class TinyMceHelper extends HtmlHelper {
    var $helpers=array('Javascript');
    var $defaults=array(
        'theme'=>'simple',
        'mode'=>'textareas',
        'convert_urls'=>false,
        );
    function beforeRender(){
        $view = ClassRegistry::getObject('view');
        if (is_object($view)) {
            $view->addScript($this->Javascript->link('tiny_mce/tiny_mce'));
        }
    }
    function init($options=false){
    if(!$options){
        $options=$this->defaults;
    }
    $code='tinyMCE.init('.json_encode($options).');';
    return $this->js->codeBlock($code);
    }
}
?>
<?php

namespace odaialali\qrcodereader;

use yii\helpers\Html;

/**
 * 
 */
class QrReader extends \yii\base\Widget
{
    public $width;
    public $height;
    
    public $successCallback;
    
    public function init() {
        if($this->width === null){
            $this->width = '300px';
        }
        if($this->height === null){
            $this->height = '250px';
        }
        if($this->successCallback === null){
            $this->successCallback = 'function(data){}';
        }
        QrReaderAsset::register($this->getView());
    }
    
    public function run()
    {
        $this->registerJsOptions();
        
        return Html::tag('div', '', [
            'id' => $this->id,
            'class' => 'qr-reader',
            'style' => "width:$this->width;height:$this->height;"
        ]);
        
//        return Html::tag('div', $reader, [
//            'class' => 'qrcode-reader-container'
//        ]);
    }
    
    protected function registerJsOptions(){
        $view = $this->getView();
        $view->registerJs("$('#$this->id').html5_qrcode("
                . "$this->successCallback"
                . ","
                . "function(error){"
                . "console.log(error)"
                . "}, function(videoError){"
                . "console.log(videoError)"
                . "}"
                . ");");
    }
}

<?php

namespace odaialali\qrcodereder;

use yii\helpers\Html;

/**
 * 
 */
class QrReader extends \yii\base\Widget
{
    public $width;
    public $height;
    
    public function init() {
        if($width === null){
            $width = '300px';
        }
        if($height === null){
            $height = '250px';
        }
        QrReaderAsset::register($this->getView());
    }
    
    public function run()
    {
        $reader = Html::tag('div', '', [
            'style' => "width:$this->width;height:$this->height;"
        ]);
        return Html::tag('div', $reader, [
            'class' => 'qrcode-reader-container'
        ]);
        
    }
    
    protected function registerJsOptions(){
        $view = $this->getView();
        
        if(isset($js)){
            $view->registerJs("$('#reader').html5_qrcode(function(data){"
                    . "alert(data)"
                    . "},"
                    . "function(error){"
                    . "//show read errors"
                    . "}, function(videoError){"
                    . "//the video stream could be opened"
                    . "}"
                    . ");");
        }
    }
}

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
    
    public function init() {
        if($this->width === null){
            $this->width = '300px';
        }
        if($this->height === null){
            $this->height = '250px';
        }
        QrReaderAsset::register($this->getView());
    }
    
    public function run()
    {
        $this->registerJsOptions();
        
        $reader = Html::tag('div', '', [
            'id' => $this->id,
            'style' => "width:$this->width;height:$this->height;"
        ]);
        
        return Html::tag('div', $reader, [
            'class' => 'qrcode-reader-container'
        ]);
    }
    
    protected function registerJsOptions(){
        $view = $this->getView();
        $view->registerJs("$('#$this->id').html5_qrcode(function(data){"
                . "console.log('SUCCESS');"
                . "console.log(data);"
                . "console.log('-------');"
                . "},"
                . "function(error){"
                . "console.log(error)"
                . "}, function(videoError){"
                . "console.log(videoError)"
                . "}"
                . ");");
    }
}

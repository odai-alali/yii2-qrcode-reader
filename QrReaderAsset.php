<?php

/*
 * License for Tournamo.
 */

namespace odaialali\qrcodereder;

use yii\web\AssetBundle;
/**
 * Description of QrReaderAsset
 *
 * @author Odai Alali <odai.alali@gmail.com>
 */
class QrReaderAsset extends AssetBundle{
    //put your code here
    public $css = [
        'qrcodereader.css',
    ];
    public $js = [
        'html5_qrcode.min.js',
    ];
    public function init() {
        parent::init();
        $this->sourcePath = __DIR__.'/js/lib';
    }
}

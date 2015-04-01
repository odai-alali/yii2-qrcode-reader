<?php

/*
 * License for Tournamo.
 */

namespace odaialali\qrcodereader;

use yii\web\AssetBundle;
/**
 * Description of QrReaderAsset
 *
 * @author Odai Alali <odai.alali@gmail.com>
 */
class QrReaderAsset extends AssetBundle{
    //put your code here
//    public $sourcePath = '@vendor/odaialali/yii2-qrcode-reader';
    public $css = [
        'css/qrcodereader.css',
    ];
    public $js = [
        'js/lib/html5-qrcode.min.js',
        'js/qrcode-reader.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $options = [
        'forceCopy' => true
    ];
    public function init() {
        parent::init();
        $this->sourcePath = __DIR__.'/asset';
    }
}

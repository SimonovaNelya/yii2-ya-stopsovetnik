<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 22.03.2017
 */
namespace skeeks\yii2\stopsovetnik;

use yii\web\AssetBundle;

/**
 * Class StopsovetnikAsset
 * @package skeeks\yii2\stopsovetnik
 */
class StopsovetnikAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/yii2/stopsovetnik/assets';

    public $js = [
        'dist/ss.min.js',
    ];
}

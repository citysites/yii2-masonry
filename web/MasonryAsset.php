<?php

namespace citysites\web;

use yii\web\AssetBundle;

class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/masonry-layout/dist';

    public $js = [
        'masonry.pkgd.min.js',
    ];
}

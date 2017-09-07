<?php

namespace iamsaint\datetimepicker;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
	public $sourcePath = '@iamsaint/datetimepicker/picker';

    public $js = [
        'jquery.datetimepicker.js',
    ];

    public $css = [
        'jquery.datetimepicker.css',
    ];

	public $depends = [
		'yii\web\YiiAsset',
	];
}

<?php
/**
 * NpmFreeAssetBundle.php
 * @author Michele Raso
 * @link httpw://www.micheleraso.com
 */

namespace micheleraso\yii\fontawesome;

/**
 * Class NpmFreeAssetBundle
 * @package micheleraso\yii\fontawesome
 */
class NpmFreeAssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    public $css = [
        'css/all.min.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
            'webfonts/*',
            'sprites/*',
            'svgs/*',
        ],
    ];
}

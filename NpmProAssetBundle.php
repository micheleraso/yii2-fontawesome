<?php
/**
 * NpmProAssetBundle.php
 * @author Michele Raso
 * @link httpw://www.micheleraso.com
 */

namespace micheleraso\yii\fontawesome;

/**
 * Class NpmProAssetBundle
 * @package micheleraso\yii\fontawesome
 */
class NpmProAssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/node_modules/@fortawesome/fontawesome-pro';

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

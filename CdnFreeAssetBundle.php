<?php
/**
 * CdnFreeAssetBundle.php
 * @author Michele Raso
 * @link httpw://www.micheleraso.com
 */

namespace micheleraso\yii\fontawesome;

/**
 * Class CdnFreeAssetBundle
 * @package micheleraso\yii\fontawesome
 */
class CdnFreeAssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $css = [
        'https://use.fontawesome.com/releases/v5.15.4/css/all.css',
    ];
}

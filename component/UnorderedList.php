<?php
/**
 * UnorderedList.php
 * @author Michele Raso
 * @link https://www.micheleraso.com
 */

namespace micheleraso\yii\fontawesome\component;

use micheleraso\yii\fontawesome\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class UnorderedList
 * @package micheleraso\yii\fontawesome\component
 */
class UnorderedList
{
    protected $iconCssPrefix;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param string $iconCssPrefix
     * @param array $options
     */
    public function __construct($iconCssPrefix, $options = [])
    {
        $this->iconCssPrefix = $iconCssPrefix;

        Html::addCssClass($options, FontAwesome::$basePrefix . '-ul');

        $options['item'] = function ($item, $index) {
            return call_user_func($item, $index);
        };

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return Html::ul($this->items, $this->options);
    }

    /**
     * @param string $label
     * @param array $options
     * @return \micheleraso\yii\fontawesome\component\UnorderedList
     */
    public function item($label, $options = [])
    {
        $this->items[] = function ($index) use ($label, $options) {
            $tag = ArrayHelper::remove($options, 'tag', 'li');

            $icon = ArrayHelper::remove($options, 'icon');
            $icon = empty($icon)
                ? null
                : (is_string($icon) ? (string)(new Icon($this->iconCssPrefix, $icon))->li() : $icon);

            $content = trim($icon . $label);

            return Html::tag($tag, $content, $options);
        };

        return $this;
    }
}

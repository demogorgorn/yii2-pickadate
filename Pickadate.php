<?php

/**
 * @copyright Copyright &copy; Oleg Martemjanov, foreign.by, 2015
 * @package yii2-pickadate
 * @version 1.0
 */

namespace demogorgorn\pickadate;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

/**
 * The mobile-friendly, responsive, and lightweight jQuery date & time input picker.
 *
 * @see https://github.com/amsul/pickadate.js
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 * @since 1.0
 */
class Pickadate extends \yii\widgets\InputWidget
{
    public $options = [];
    
    public $clientOptions = [];

    public $varName = null;

    /**
     * Initializes the widget
     */
    public function init()
    {
        parent::init();

        if (!isset($this->options['id'])) 
            $this->options['id'] = $this->getId();
    }

    /**
     * Runs the widget
     *
     * @return string|void
     */
    public function run()
    {
        $this->registerAssets();

        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }

    }

    /**
     * Register client assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        PickadateAsset::register($view);

        $options= Json::encode($this->clientOptions, JSON_NUMERIC_CHECK);

        $js = "$('";
        $js .= '#'.$this->options['id'];
        $js .= "').pickadate({$options});";

        if ($this->varName !== null)
            $js = "var {$this->varName} = {$js}";

        $this->getView()->registerJs($js, \yii\base\View::POS_END);
    }
}
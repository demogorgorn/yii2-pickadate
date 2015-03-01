<?php

/**
 * @copyright Copyright &copy; Oleg Martemjanov, foreign.by, 2015
 * @package yii2-pickadate
 * @version 1.0
 */

namespace demogorgorn\pickadate;

/**
 * Sortable bundle for \demogorgorn\pickadate\Pickadate
 *
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 * @since 1.0
 */
class PickadateAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/pickadate/lib/compressed/';

    public $js = [ 'picker.js', 'picker.date.js' ];

    public $css = [ 'themes/default.css', 'themes/default.date.css' ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
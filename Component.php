<?php
namespace app\modules\setting;
use app\modules\setting\models\Setting;
use yii\base\Component as ComponentParent;
use yii\helpers\ArrayHelper;

class Component extends ComponentParent implements \ArrayAccess {
    private $container = array();

    public function init() {
        parent::init();
        $this->container = ArrayHelper::map(Setting::find()->all(), 'key', 'value');
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

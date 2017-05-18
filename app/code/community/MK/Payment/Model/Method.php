<?php

class MK_Payment_Model_Method extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'mkpayment'; // 'mkpayment' - произвольный
    // блоки, используемые на шаге checkout
    protected $_formBlockType = 'mkpayment/form';// - где радиокнопки, где выбор payment метода
    protected $_infoBlockType = 'mkpayment/info';// показывается в блоке прогресса прохождения чекаута

    public function validate()
    {
        // проверка секретного кода

        return parent::validate();
    }

}
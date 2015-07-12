<?php

class Cpcoder_Slider_Model_Config_Mode
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'flexslider-slide', 'label'=>Mage::helper('adminhtml')->__('FlexSlider Slide')),
			array('value'=>'flexslider-fade', 'label'=>Mage::helper('adminhtml')->__('FlexSlider Fade'))
        );
    }
}

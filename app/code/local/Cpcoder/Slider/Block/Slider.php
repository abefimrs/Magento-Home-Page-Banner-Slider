<?php

class Cpcoder_Slider_Block_Slider extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getBanner1()     
     { 
        if (!$this->hasData('slider')) {
            $this->setData('slider', Mage::registry('slider'));
        }
        return $this->getData('slider');
        
    }
	public function getDataBanner1()
    {
    	$resource = Mage::getSingleton('core/resource');
		$read= $resource->getConnection('core_read');
		$slideTable = $resource->getTableName('slider');	
		$select = $read->select()
		   ->from($slideTable,array('slider_id','title','link','description','image','status'))
		   ->where('status=?',1);
		$slide = $read->fetchAll($select);	
		return 	$slide;			
    }
	public function getConfig($att) 
	{
		$config = Mage::getStoreConfig('slider');
		if (isset($config['slider_config']) ) {
			$value = $config['slider_config'][$att];
			return $value;
		} else {
			throw new Exception($att.' value not set');
		}
	}
}
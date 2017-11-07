<?php
namespace Gerrymcdonnell\Jssorslider\View\Helper;
use Cake\View\Helper;

define("PLUGIN_NAME", "Gerrymcdonnell/Jssorslider.");


class JssorsliderHelper extends Helper {
	
	var $helpers = array('Html');	
	const PLUGIN_NAME='';
	
	
	
	public function initialize(array $config){
		//debug('init jssorHelper');
		
		$this->addjs('jssor.slider-22.0.15.min.js');
	}
	
	//caroseul slide	
	public function addCarouselSlide($img,$urllink=null){
		echo '<div style="display:none;">';
		
		echo $this->Html->link(
			$this->Html->image($img,['img-data-u'=>'image']), $urllink, array('escape' => false)
		);

		echo '</div>';
		echo '<a data-u="any" href="http://www.jssor.com" style="display:none">Carousel</a>';
	}
	

	public function addimg($img){
		$imgpath=PLUGIN_NAME.'img/'.$img;
		//debug($imgpath);
		return $imgpath;
	}
	
	public function addjs($js){
		echo $this->Html->script(PLUGIN_NAME.$js);
	}

}
?>
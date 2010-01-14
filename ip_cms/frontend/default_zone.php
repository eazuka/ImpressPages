<?php 
/**
 * @package		ImpressPages
 * @copyright	Copyright (C) 2009 JSC Apro media.
 * @license		GNU/GPL, see ip_license.html
 */
 
namespace Frontend;
 
if (!defined('CMS')) exit;  

require_once (__DIR__.'/element.php');


/**
 *   
 * @package ImpressPages
 */ 
class DefaultZone extends Zone{

  /**
   * Find elements of this zone.      
   * @return array Element   
   */
  public function getElements($language = null, $parentElementId = null, $startFrom = 1, $limit = null, $reverseOrder = null){
    $answer = array();
    $answer[] = new Element(null, $this->name);
    return $answer;
  }
  

  /**
   * @param int $elementId       
   * @return Element   
   */
	public function getElement($elementId){
    return new Element(null, $this->name); //default zone return element with all url and get variable combinations
	}
	
	
  /**
   * @param array $urlVars        
   * @param array $getVars        
   * @return Element or false if page does not exist   
   */	
  public function findElement($urlVars, $getVars){
    return new Element(null, $this->name); //default zone return element with all url and get variable combinations
  }
  



  
}



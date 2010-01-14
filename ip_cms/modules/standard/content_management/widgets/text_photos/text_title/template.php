<?php 
/**
 * @package		ImpressPages
 * @copyright	Copyright (C) 2009 JSC Apro media.
 * @license		GNU/GPL, see ip_license.html
 */

namespace Modules\standard\content_management\Widgets\text_photos\text_title;   
 
if (!defined('FRONTEND')&&!defined('BACKEND')) exit;
class Template {

  public static function generateHtml($title, $level, $text, $layout = null){  
    $text = $text;
    if (strpos($text, '<p') > 10 || strpos($text, '<p') === false)
      $text = "<p>".$text."</p>";
    $text = str_replace('<br>', '<br />', $text);

    
    switch($layout){
      default:
      case "default":     
        return '
        <div class="ipWidget ipWidgetTitle"><h'.htmlspecialchars($level).' class="ipWidgetTitleHeading">'.htmlspecialchars($title).'</h'.htmlspecialchars($level).'></div>
        <div class="ipWidget ipWidgetText">'.$text.'</div>
        ';
      break;
    }
  }
	 
}


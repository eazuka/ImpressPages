<?php 
/**
 * @package		ImpressPages
 * @copyright	Copyright (C) 2009 JSC Apro media.
 * @license		GNU/GPL, see ip_license.html
 */

namespace Modules\standard\content_management\Widgets\text_photos\text_photo;   
 
if (!defined('FRONTEND')&&!defined('BACKEND')) exit;
class Template {

  public static function generateHtml($title, $photo, $photo_big, $text, $layout=null){
		
    switch($layout){
      default:
      case "default":
    
        if (strpos($text, '<p') > 10 || strpos($text, '<p') === false)
          $text = "<p>".$text."</p>";
        $text = str_replace('<br>', '<br />', $text);
        
        
        if ($photo){
          $info = getimagesize($photo);
          $image = '<a class="ipWidgetTextPhotoImageLeft" href="'.$photo_big.'" rel="lightbox[ipWidget]" title="'.htmlspecialchars($title).'"><img width="'.$info[0].'" height="'.$info[1].'" src="'.$photo.'" alt="'.htmlspecialchars($title).'" /></a>';
        }else{
          $image = '';
        }
        return ' 
          <div class="ipWidget ipWidgetTextPhoto">
            '.$image.'
            <div class="ipWidgetTextPhotoText">'.$text.'</div> 
            <div class="clear"><!-- --></div>
          </div>
        
        ';
    
      break;
      case "right":
    
        if (strpos($text, '<p') > 10 || strpos($text, '<p') === false)
          $text = "<p>".$text."</p>";
        $text = str_replace('<br>', '<br />', $text);
        
        
        if ($photo){
          $info = getimagesize($photo);
          $image = '<a class="ipWidgetTextPhotoImageRight" href="'.$photo_big.'" rel="lightbox[ipWidget]" title="'.htmlspecialchars($title).'"><img width="'.$info[0].'" height="'.$info[1].'" src="'.$photo.'" alt="'.htmlspecialchars($title).'" /></a>';
        }else{
          $image = '';
        }
        return ' 
          <div class="ipWidget ipWidgetTextPhoto">
            '.$image.'
            <div class="ipWidgetTextPhotoText">'.$text.'</div> 
            <div class="clear"><!-- --></div>
          </div>
        
        ';
    
      break;
      case "left_small":
    
        if (strpos($text, '<p') > 10 || strpos($text, '<p') === false)
          $text = "<p>".$text."</p>";
        $text = str_replace('<br>', '<br />', $text);
        
        
        if ($photo)
          $image = '<img class="ipWidgetTextPhotoImageSmallLeft" src="'.$photo.'" alt="'.htmlspecialchars($title).'" />';
        else
          $image = '';
        return ' 
          <div class="ipWidget ipWidgetTextPhoto">
            '.$image.'
            <div class="ipWidgetTextPhotoText">'.$text.'</div> 
            <div class="clear"><!-- --></div>
          </div>
        
        ';
    
      break;      
      case "right_small":
    
        if (strpos($text, '<p') > 10 || strpos($text, '<p') === false)
          $text = "<p>".$text."</p>";
        $text = str_replace('<br>', '<br />', $text);
        
        
        if ($photo)
          $image = '<img class="ipWidgetTextPhotoImageSmallRight" src="'.$photo.'" alt="'.htmlspecialchars($title).'" />';
        else
          $image = '';
        return ' 
          <div class="ipWidget ipWidgetTextPhoto">
            '.$image.'
            <div class="ipWidgetTextPhotoText">'.$text.'</div> 
            <div class="clear"><!-- --></div>
          </div>
        
        ';
    
      break;
    }
    return $answer;
    
  }
	 
}


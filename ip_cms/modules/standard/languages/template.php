<?php
/**
 * @package		ImpressPages
 * @copyright	Copyright (C) 2009 JSC Apro media.
 * @license		GNU/GPL, see ip_license.html
 */
namespace Modules\standard\languages;
if (!defined('FRONTEND')&&!defined('BACKEND')) exit;

class Template{


  public static function languages($languages) {
    global $site;
    $answer = '';
    foreach ($languages as $key => $language) {
      if($language['id'] == $site->currentLanguage['id'])
        $answer .= '<a title="'.htmlspecialchars($language['d_long']).'" class="act" href="'.$site->generateUrl($language['id']).'">'.htmlspecialchars($language['d_short']).'</a>';
      else          
        $answer .= '<a title="'.htmlspecialchars($language['d_long']).'" href="'.$site->generateUrl($language['id']).'">'.htmlspecialchars($language['d_short']).'</a>';
    }
    return $answer;
  }   
    

}
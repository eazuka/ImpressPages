<?php 
/**
 * @package		ImpressPages
 * @copyright	Copyright (C) 2009 JSC Apro media.
 * @license		GNU/GPL, see ip_license.html
 */

namespace Modules\standard\content_management\Widgets\misc\contact_form;   
 
if (!defined('FRONTEND')&&!defined('BACKEND')) exit;

require_once (BASE_DIR.LIBRARY_DIR.'php/form/standard.php');

class Template {

  public static function generateHtml($fields, $thank_you, $email_to, $button, $email_subject, $id, $layout=null){
    
    global $site;
    global $module_url;
    global $log;

    
    switch($layout){
      default:
      case "default":    
        $answer = '';
        $field = '';
        $field = new \Library\Php\Form\FieldHidden();
        $field->name = 'cm_group';
        $field->value = 'misc';
        $fields[] = $field;
        
        $field = new \Library\Php\Form\FieldHidden();
        $field->name = 'cm_name';
        $field->value = 'contact_form';
        $fields[] = $field;
        
        
        $field = new \Library\Php\Form\FieldHidden();
        $field->name = 'action';
        $field->value = 'contact_form';
        $fields[] = $field;     
        
        $field = new \Library\Php\Form\FieldHidden();
        $field->name = 'spec_id';
        $field->value = $id;
        $fields[] = $field;  
        
        
        $html_form = new \Library\Php\Form\Standard($fields);
        
        
        $answer .= $html_form->generateForm($button);
        
        return '<div class="contentMod contentModContactForm">'.$answer.'</div>';
    }
  }
  
  public static function generateEmail($fields){
    require_once(BASE_DIR.LIBRARY_DIR.'php/text/system_variables.php');
    global $parametersMod;
    $content = '';
    for($i=0; $i<sizeof($fields); $i++){
      if (get_class($fields[$i]) != 'Library\\Php\\Form\\FieldHidden') {
        switch (get_class($fields[$i])) {
          case 'Library\\Php\\Form\\FieldEmail':
            $content .= '<b>'.htmlspecialchars($fields[$i]->caption).' :</b> <a href="mailto:'.nl2br(htmlspecialchars($fields[$i]->postedValue())).'">'.nl2br(htmlspecialchars($fields[$i]->postedValue())).'</a><br>';
          break;
          default:
            $content .= '<b>'.htmlspecialchars($fields[$i]->caption).' :</b> '.nl2br(htmlspecialchars($fields[$i]->postedValue())).'<br>';
          break;
        }
      }
    }

    $email = $parametersMod->getValue('standard', 'configuration', 'main_parameters', 'email_template');
    $email = str_replace('[[content]]', $content, $email);
    
    $email = \Library\Php\Text\SystemVariables::insert($email);
    $email = \Library\Php\Text\SystemVariables::clear($email);

		$email = '
		<html>
			<head></head>
			<body>
				'.$email.'
			</body>
		</html>';
    
    return $email;
  
  }
}


<?php

class HtmlComponents {
   public function getSelect($id,$cssClass,$res,$id_field){
        $tmp ="";
	while($info = mysql_fetch_array($res)){

            $label = htmlentities(stripslashes($info['label_fr'] . " (" . $info['prix'] )) . " €)";
            $value = htmlentities(stripslashes($info[$id_field]));
            $tmp .= "<option data-prix='" . $info['prix']  . "' value='" . $value . "'>" . $label . "</option>"; 
        }
	$v =<<<EOT
		<select name="select" id="{$id}" class="{$cssClass}">
                   {$tmp}
		</select>
EOT;
	return $v;
   }
   public function getInputFieldText($id,$cssClass,$disabled){
	$v =<<<EOT
           <input {$disabled} type="text" id="{$id}" name="{$id}" class="{$cssClass}">
EOT;
	return $v;
   }
   public function getButton($id,$cssClass,$disabled){
	$v =<<<EOT
           <button {$disabled}  id="{$id}" name="{$id}" class="{$cssClass}">  = </button>
EOT;
	return $v;
   }
   public function getButtonTotal($id,$cssClass,$disabled){
	$v =<<<EOT
           <button {$disabled}  id="{$id}" name="{$id}" class="{$cssClass}">  Total </button>
EOT;
	return $v;
   }
}


<?php

use App\Models\Staff;
/*
|--------------------------------------------------------------------------
| Macros
|--------------------------------------------------------------------------
|
| Here is where you can register customize function, method.
|
*/

/**
 * Gender radio group
 * @var array
 */
Form::macro('radioGroup', function ($name, $data = array(), $checked = null, $inline = false) {

    $html = '';

    if($inline)
    {
        $html .= '<br>';
    }

    if(!empty($data))
    {
        foreach($data as $row)
        {
            $html .= '<label class="radio-inline">' . Form::radio($name, $row['value'], ($row['value'] == $checked) ? true : false) . $row['index'] . '</label>';   
        }
    }

    return $html;
    
});

/**
* Staff macro
* Generates the dropdown menu of app platform status
*/
Form::macro('staff', function ($name = "id", $selected = null, $class = null, $text = '') {

$person = Staff::all();

$select = '<select name="'.$name.'" class="'.$class.'" '.$text.'>';
$select .= '<option value="">-- Select staff name --</option>';

foreach ($person as $staff) 
{
    $select .= '<option value="'.$staff->id.'"'.($selected == $staff->id ? ' selected="selected"' : '').'>'.$staff->name.'</option>';
}
$select .= '</select>';

return $select;

});

?>

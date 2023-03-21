<?php
function options($ages, $values)
{
    foreach ($ages as $age) {
        $selected = '';

        // if (in_array($age, $values, true)) {
        //     $selected = 'selected';
        // }

        var_dump($values);

        printf("<option value='%s' %s>%s</option>\n", $age, $selected,  $age);
    }
}

<?php


function ages($ageLits, $selectedValues)
{
    if (isset($ageLits) && !empty($ageLits)) {

        foreach ($ageLits as $ageLit) {
            $selected = '';
            if (in_array($ageLit, $selectedValues)) {
                $selected = 'selected';
            }
            printf("<option value='%s' %s>%s</option>\n", $ageLit, $selected, $ageLit);
        }
    }
}

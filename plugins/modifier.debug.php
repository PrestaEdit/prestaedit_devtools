<?php
function smarty_modifier_debug($data, $die = false)
{
    if (_PS_MODE_DEV_) {
        return Tools::dieObject($data, (bool) $die);
    }

    return;
}

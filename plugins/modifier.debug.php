<?php
function smarty_modifier_debug($data, $kill = false)
{
    if (_PS_MODE_DEV_) {
        return Tools::dieObject($data, $kill);
    }

    return;
}

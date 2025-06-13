<?php
function smarty_block_dev($params, $content, Smarty_Internal_Template $template, &$repeat)
{
    if (_PS_MODE_DEV_) {
        if (!$repeat) {
            if (isset($content)) {
                return '<div class="alert alert-warning" role="alert">Debug</div><div class="pl-3">'.nl2br($content).'</div><div class="alert alert-warning mt-2" role="alert">Debug: end</div>';
            }
        }
    }
}

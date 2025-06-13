<?php
class PrestaEdit_DevTools extends Module
{
    public function __construct()
    {
        $this->name = 'prestaedit_devtools';
        $this->displayName = 'PrestaEdit DevTools';
        $this->version = '0.0.1';
        $this->author = 'PrestaEdit';
        $this->description = 'Development tools';

        parent::__construct();
    }

    public function install()
    {
        parent::install() && $this->registerHook(['displayHeader']);

        return true;
    }

    public function hookDisplayHeader()
    {
        $this->context->smarty->addPluginsDir(
            [_PS_MODULE_DIR_.$this->name.'/plugins/']
        );
    }
}

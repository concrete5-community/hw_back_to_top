<?php

namespace Concrete\Package\HwBackToTop\Block\BackToTop;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Support\Facade\Package as PackageFacade;

defined('C5_EXECUTE') or die(("Access Denied."));

class Controller extends BlockController
{


    public function getBlockTypeDescription()
    {
        return t("Adds a Back to Top on your website page.");
    }

    public function getBlockTypeName()
    {
        return t("HW Back To Top");
    }

    public function registerViewAssets($outputContent = '')
    {
        $pkg = PackageFacade::getByHandle('hw_back_to_top');
        $packagePath = $pkg->getRelativePath();
        $this->addFooterItem(\Core::make('helper/html')->javascript($packagePath . '/js/back-to-top.js', 'hw_back_to_top'));
        $this->addHeaderItem(\Core::make('helper/html')->css($packagePath . '/css/back-to-top.css', 'hw_back_to_top'));
    }


}

?>
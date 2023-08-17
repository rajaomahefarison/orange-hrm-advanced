<?php

namespace OrangeHRM\Admin\Controller;

use OrangeHRM\Admin\Service\TestService;
use OrangeHRM\Core\Controller\AbstractVueController;
use OrangeHRM\Core\Vue\Component;
use OrangeHRM\Core\Vue\Prop;
use OrangeHRM\Framework\Http\Request;
use OrangeHRM\Admin\Traits\Service\TestServiceTrait;

class SysUserController extends AbstractVueController
{
    private $sysTestService;
    public function __construct()
    {   
        parent::__construct();
        $this->sysTestService = new TestService();
    }
    /**
     * @inheritDoc
     */
    public function preRender(Request $request) : void {
        $component = new Component('test-component');
        $component->addProp(new Prop('unselectable-ids', Prop::TYPE_NUMBER,$this->sysTestService->getAll()));
        $this->setComponent($component);
    }
}
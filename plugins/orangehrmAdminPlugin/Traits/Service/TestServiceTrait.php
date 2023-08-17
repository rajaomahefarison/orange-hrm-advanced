<?php
namespace OrangeHRM\Admin\Traits\Service;
use OrangeHRM\Admin\Service\TestService;
use OrangeHRM\Core\Traits\ServiceContainerTrait;
use OrangeHRM\Framework\Services;

trait TestServiceTrait
{
    use ServiceContainerTrait;

    /**
     * @return TestService
     */
    protected function getTestService(): TestService
    {
        return $this->getContainer()->get(Services::TEST_SERVICE);
    }
}

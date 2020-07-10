<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Indexer\Test\Unit\Model\ResourceModel\Mview\View;

use Magento\Framework\App\ResourceConnection;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Indexer\Model\ResourceModel\Mview\View\State;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    /**
     * @var State
     */
    protected $model;

    public function testConstruct()
    {
        $resourceMock = $this->createMock(ResourceConnection::class);
        $objectManager = new ObjectManager($this);
        $arguments = $objectManager->getConstructArguments(
            State::class,
            ['resource' => $resourceMock]
        );
        $this->model = $objectManager->getObject(
            State::class,
            $arguments
        );
        $this->assertEquals(
            [['field' => ['view_id'], 'title' => __('State for the same view')]],
            $this->model->getUniqueFields()
        );
    }
}

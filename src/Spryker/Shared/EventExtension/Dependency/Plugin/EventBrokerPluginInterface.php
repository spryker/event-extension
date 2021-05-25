<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\EventExtension\Dependency\Plugin;

use Generated\Shared\Transfer\EventCollectionTransfer;

interface EventBrokerPluginInterface
{
    /**
     * Specification:
     * - TODO::add specification here
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\EventCollectionTransfer $eventCollectionTransfer
     *
     * @return void
     */
    public function putEvents(EventCollectionTransfer $eventCollectionTransfer): void;

    /**
     * Specification:
     * - TODO::add specification here
     *
     * @api
     *
     * @param string $eventBusName
     *
     * @return bool
     */
    public function isSupportEventBusName(string $eventBusName): bool;
}

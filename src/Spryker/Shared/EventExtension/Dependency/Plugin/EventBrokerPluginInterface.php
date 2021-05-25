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
     * - Transits events to the specific Event Broker.
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
     * - Returns true if plugin supports requested `eventBusName`.
     *
     * @api
     *
     * @param string $eventBusName
     *
     * @return bool
     */
    public function isApplicable(string $eventBusName): bool;
}

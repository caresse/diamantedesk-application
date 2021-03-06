<?php
/*
 * Copyright (c) 2014 Eltrino LLC (http://eltrino.com)
 *
 * Licensed under the Open Software License (OSL 3.0).
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://opensource.org/licenses/osl-3.0.php
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@eltrino.com so we can send you a copy immediately.
 */
namespace Diamante\DeskBundle\Model\Ticket\EmailProcessing;

use Diamante\DeskBundle\Model\Shared\Repository;
use Diamante\DeskBundle\Model\Ticket\Ticket;

/**
 * Interface MessageReferenceRepository
 * @package Diamante\DeskBundle\Model\Ticket\EmailProcessing
 * @codeCoverageIgnore
 */
interface MessageReferenceRepository extends Repository
{
    /**
     * Retrieves MessageReference by given message id
     * @param string $messageId
     * @return MessageReference
     */
    public function getReferenceByMessageId($messageId);

    /**
     * Retrieves all Ticket MessageReferences
     * @param Ticket $ticket
     * @return array|MessageReference[]
     */
    public function findAllByTicket(Ticket $ticket);
}

<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Pnr\AddMultiElements;

/**
 * Security
 *
 * @package Amadeus\Client\Struct\Pnr\AddMultiElements
 * @author Boris Desiatskii <borisd@glanzu.com>
 */
class Security
{
    //for read and write access
    const ACCESS_MODE_READ_WRITE = 'B';
    //for read only access
    const ACCESS_MODE_READ = 'R';
    //for read and limited write access (only ticketing entries are allowed)
    const ACCESS_MODE_READ_WRITE_LIMITED = 'T';
    //for access denied (this will override EOS agreements)
    const ACCESS_MODE_DENIED = 'N';

    /**
     * Receiver: the entity that will be granted or denied access. It can be:
     *  A string of characters
     *  A mask of office (only for G type receiver).
     *
     * @var string
     */
    public $identification;
    /**
     * Access Mode: the specific rights that are granted to the receiver
     *
     * @var string
     */
    public $accessMode;
}

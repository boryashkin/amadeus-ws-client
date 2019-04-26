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

namespace Amadeus\Client\RequestOptions\Pnr\Element;

use Amadeus\Client\RequestOptions\Pnr\Element;
use Amadeus\Client\Struct\Pnr\AddMultiElements\Security;

/**
 * Amadeus individual PNR security (ES Element) allows you to set up special security rules
 * to allow or disallow a PNR from being accessed by one or several other offices.
 *
 * The individual PNR security functions may allow access to a PNR even when there are
 * no other special agreements in place. They generally override Amadeus extended ownership agreements (EOS)
 * when these exist, except in the case of PNR claim and reverse access claim.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\Element
 * @author Boris Desiatskii <borisd@glanzu.com>
 */
class PnrSecurity extends Element
{
    //for Pseudo Office ID. This is any identifier that is not defined by Amadeus
    const INDICATOR_PSEUDO_OFFICE_ID = 'P';
    //for any Amadeus Office ID
    const INDICATOR_AMADEUS_OFFICE_ID = 'G';
    //for IATA number
    const INDICATOR_IATA_NUMBER = 'I';

    /**
     * @var Security[]
     */
    public $security;
    /**
     * @var
     */
    public $indicator;
}

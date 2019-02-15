<?php

/**
 * This file is part of graze/telnet-client.
 *
 * Copyright (c) 2016 Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/telnet-client/blob/master/LICENSE
 * @link https://github.com/graze/telnet-client
 */

namespace Graze\TelnetClient\Matcher;

interface MatcherInterface
{
    /**
     * @param string $expected
     * @param string $subject
     * @param array $matches
     * @return bool
     */
    public function match($expected, $subject, array &$matches);
}
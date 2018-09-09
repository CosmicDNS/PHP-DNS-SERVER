<?php
/*
 * This file is part of PHP DNS Server.
 *
 * (c) Yif Swery <yiftachswr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yswery\DNS;

/**
 * Class ResolverInterface
 */
interface ResolverInterface
{
    /**
     * Return answer for given query.
     *
     * @param ResourceRecord[] $query
     *
     * @return ResourceRecord[]
     */
    public function getAnswer(array $query): array;

    /**
     * Returns true if resolver supports recursion.
     *
     * @return boolean
     */
    public function allowsRecursion(): bool;

    /**
     * Check if the resolver knows about a domain.
     * Returns true if the resolver holds info about $domain
     *
     * @param string $domain The domain to check for
     *
     * @return boolean
     */
    public function isAuthority($domain): bool;
}

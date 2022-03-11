<?php

/**
 * Copyright 2014-Present Couchbase, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Couchbase;

/**
 * A compound FTS query that performs a logical OR between all its sub-queries (disjunction). It requires that a
 * minimum of the queries match. The minimum is configurable (default 1).
 */
class DisjunctionSearchQuery implements JsonSerializable, SearchQuery
{
    public function jsonSerialize()
    {
    }

    public function __construct(array $queries)
    {
    }

    /**
     * @param float $boost
     * @return DisjunctionSearchQuery
     */
    public function boost(float $boost): DisjunctionSearchQuery
    {
    }

    /**
     * @param SearchQuery ...$queries
     * @return DisjunctionSearchQuery
     */
    public function either(SearchQuery ...$queries): DisjunctionSearchQuery
    {
    }

    /**
     * @param int $min
     * @return DisjunctionSearchQuery
     */
    public function min(int $min): DisjunctionSearchQuery
    {
    }
}

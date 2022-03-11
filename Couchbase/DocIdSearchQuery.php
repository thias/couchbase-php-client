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
 * A FTS query that matches on Couchbase document IDs. Useful to restrict the search space to a list of keys (by using
 * this in a compound query).
 */
class DocIdSearchQuery implements JsonSerializable, SearchQuery
{
    public function jsonSerialize()
    {
    }

    public function __construct()
    {
    }

    /**
     * @param float $boost
     * @return DocIdSearchQuery
     */
    public function boost(float $boost): DocIdSearchQuery
    {
    }

    /**
     * @param string $field
     * @return DocIdSearchQuery
     */
    public function field(string $field): DocIdSearchQuery
    {
    }

    /**
     * @param string ...$documentIds
     * @return DocIdSearchQuery
     */
    public function docIds(string ...$documentIds): DocIdSearchQuery
    {
    }
}

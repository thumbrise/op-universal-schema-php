<?php

declare(strict_types=1);
/*
 * Copyright 2026 thumbrise
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

namespace Thumbrise\OP\Universal\Schema;

/**
 * Kind is required when of is set.
 */
class Term
{
    public function __construct(
        public readonly string $id,
        /** Human-readable note about the term. */
        public readonly string $comment,
        /** Whether this term must be present. */
        public readonly ?bool $required = null,
        public readonly ?Kind $kind = null,
        public readonly null | bool | float | int | string $value = null,
        /** Requires kind. @var list<Term>|null */
        public readonly ?array $of = null,
        public readonly array $trait = [],
    ) {}
}

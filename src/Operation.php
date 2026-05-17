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

class Operation
{
    /**
     * @param list<Term> $input
     * @param list<Term> $output
     * @param list<Term> $error
     * @param list<Term> $trait
     */
    public function __construct(
        public readonly string $id,
        public readonly string $comment,
        /** @var Term[] */
        public readonly array $input,
        /** @var Term[] */
        public readonly array $output,
        /** @var Term[] */
        public readonly array $error,
        /** @var Term[] */
        public readonly array $trait,
    ) {}
}

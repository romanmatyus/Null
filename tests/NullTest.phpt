<?php

use RM\Null;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

Assert::same(NULL, Null::get(NULL));
Assert::same(NULL, Null::get(""));
Assert::same(NULL, Null::get(1));
Assert::same(NULL, Null::get(new StdClass));

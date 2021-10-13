<?php

declare(strict_types=1);

namespace Hyperf\DTO\Annotation\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Numeric extends BaseValidation
{
    protected mixed $rule = 'numeric';
}

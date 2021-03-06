<?php

namespace JGimeno\TaskReporter\Domain\Value;

use Ramsey\Uuid\Uuid;

class WorkingDayId
{

    protected $value;

    /**
     * WorkingDayId constructor.
     */
    public function __construct(Uuid $id)
    {
        $this->value = $id;
    }

    public static function generate()
    {
        return new self(Uuid::uuid4());
    }

    public function __toString()
    {
        return $this->value->toString();
    }
}

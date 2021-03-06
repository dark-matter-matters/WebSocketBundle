<?php

namespace Gos\Bundle\WebSocketBundle\Server\App\Registry;

use Gos\Bundle\WebSocketBundle\Periodic\PeriodicInterface;

/**
 * @author Johann Saunier <johann_27@hotmail.fr>
 */
class PeriodicRegistry
{
    /**
     * @var PeriodicInterface[]
     */
    protected $periodics = [];

    /**
     * @param PeriodicInterface $periodic
     */
    public function addPeriodic(PeriodicInterface $periodic)
    {
        $this->periodics[] = $periodic;
    }

    /**
     * @return PeriodicInterface[]
     */
    public function getPeriodics()
    {
        return $this->periodics;
    }

    public function hasPeriodic(PeriodicInterface $periodic): bool
    {
        return in_array($periodic, $this->periodics);
    }
}

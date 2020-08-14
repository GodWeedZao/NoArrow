<?php

declare(strict_types=1);

namespace GodWeedZao\NoArrow;

use pocketmine\entity\projectile\Arrow;
use pocketmine\event\entity\ProjectileHitBlockEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onShootArrow(ProjectileHitBlockEvent $event)
    {
        $arrow = $event->getEntity();
        if ($event->isCancelled())
        {
            return;
        }
        if ($arrow instanceof Arrow)
        {
            $arrow->flagForDespawn();
        }
    }

}

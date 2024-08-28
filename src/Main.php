<?php

declare(strict_types=1);

namespace _4ulag\LagReduce;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\block\Water;
use pocketmine\block\Lava;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onBlockUpdate(BlockUpdateEvent $event): void {
        $block = $event->getBlock();

        if ($block instanceof Water || $block instanceof Lava) {
            $event->cancel();
        }
    }
}
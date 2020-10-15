<?php

namespace RadJaguar2005;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getLogger()->info("Deactivated Chat ist Aktive");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $event->setCancelled(true);
        if ($player->hasPermission("enable.chat")) {
            $event->setCancelled(false);
        }
    }
}
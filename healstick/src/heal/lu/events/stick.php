<?php
namespace heal\lu\events;

use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemUseEvent;

class stick implements Listener{
    public function usestick(PlayerItemUseEvent $event): void
    {
        $player = $event->getPlayer();
        $item = $event->getItem();
        if($item->getName() === "Stick"){
            $player->getEffects()->add(new EffectInstance(VanillaEffects::HEALTH_BOOST(), 10*20));
            $player->sendMessage("Soin boosté pendant 10 secondes!");
        }
    }
}
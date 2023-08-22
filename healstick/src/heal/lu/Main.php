<?php
namespace heal\lu;

use heal\lu\events\stick;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase implements Listener{
    use SingletonTrait;
    public static Main $main;
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getPluginManager()->registerEvents(new stick(), $this);
    }
    public function onLoad():void{
        self::$main = $this;
    }
    public static function getInstance() :self{
        return self::$main;
    }
}
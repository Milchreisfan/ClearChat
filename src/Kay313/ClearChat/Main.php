<?php

namespace Kay313\ClearChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\SimpleCommandMap;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\player\Player;
use Datetime;
use pocketmine\permission\DefaultPermissions;
use pocketmine\permission\Permission;

# Command #
use Kay313\ClearChat\commands\CC;
use Kay313\ClearChat\commands\PCC;

class Main extends PluginBase implements Listener
{
    public function onLoad(): void
    {
        self::$instance = $this;
        $this->getLogger()->warning("PM-4.0.0 IS NOT A STABLE RELEASE!! Please REPORT bugs at https://github.com/Kay313/ClearChat !!"); 
    }

    public function onEnable(): void
    {
        $this->getServer()->getCommandMap()->registerAll("clearchat", [
            new CC(),
            new PPC()
        ]);
        $this->getLogger()->info("ClearChat enabled!");
    }

    public function onDisable(): void
    {
        $this->getScheduler()->cancelAllTasks();
        $this->getLogger()->info("ClearChat disabled!");
    }

    public static function getInstance(): void
    {
        return self::$instance
    }

    public function registerPermission(): void
    {
        DefaultPermissions::registerPermission(new Permission("cc.use")); # chat clear for all players
        DefaultPermissions::registerPermission(new Permission("pcc.use")); # private chat clear
    }
}
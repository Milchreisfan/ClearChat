<?php

namespace Kay313\ClearChat;

use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	public function onEnable(){
		$this->getLogger()->info("ClearChat enabled!");
	}
	public function onDisable(){
		$this->getLogger()->info("ClearChat disabled!");
	}

        public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch (strtolower($command->getName())) {
            case "cc":
                if ($sender instanceof Player) {
                    if (!isset($args[0])) {
                        if (!$sender->hasPermission("cc.use")) {
                            return true;
                        } else {
	$this->getServer()->broadcastMessage("§l§cThe Chat will now be deleted");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
  	$this->getServer()->broadcastMessage("");
        $this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("");
	$this->getServer()->broadcastMessage("§l§cThe Chat was deleted");
       }
      }
     return false;
    }
   }
  return true;
 }
}

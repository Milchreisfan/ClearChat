<?php

namespace Kay313\ClearChat;

use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
	
    public function onEnable(){
        $this->getServer()->getLogger()->info("ClearChat enabled");
    } 
    public function onDisable(){
	$this->getServer()->getLogger()->info("ClearChat disabled");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
            if(strtolower($command->getName()) == "cc"){
                if ($sender instanceof Player) {
                    if (!isset($args[0])) {
                        if (!$sender->hasPermission("cc.use")) {
                $senderName = $sender->getName();
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
	     	$this->getServer()->broadcastMessage("");
		$this->getServer()->broadcastMessage("");
		$this->getServer()->broadcastMessage("§aThe Chat was cleart by §b$senderName");
     }
    }
   }
  }
 }
}

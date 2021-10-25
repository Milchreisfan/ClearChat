<?php

namespace Kay313\ClearChat\commands;

use Kay313\ClearChat\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class CC extends Command
{

    public function __construct()
    {
        parent::__construct("cc", "Clear the serverchat!");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $player = $sender;
            if (!$player->hasPermission("cc.use")) {
                $player->sendMessage("§cYou do not have the permission to run this command!");
                return;
            }
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {
                $p->sendMessage("§l§cThe chat will now be deleted");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§l§cThe chat has been deleted");
            }
            return;
        }
        $sender->sendMessage(TextFormat::RED . "Run this command in-game!");
    }
}
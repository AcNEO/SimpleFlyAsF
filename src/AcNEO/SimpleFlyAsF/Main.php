<?php

namespace AcNEO\SimpleFlyAsF;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase implements Listener {
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
  $cmd = strtolower($command->getName());
    switch($cmd) {
      case "fly":
        if($sender->hasPermission("simple.fly.oof") {
         $this->player->setAllowFlight(true);
        }
        break;
       case "nofly":
        if($sender->hasPermission("simple.fly.oof") {
         $this->player->setAllowFlight(false);
        }
        break;
    }
  }

}


?>

<?php

declare(strict_types=1);

namespace Zeno\Commands;

use Zeno\Core;
use pocketmine\Player;
use pocketmine\command\PluginCommand;
use pocketmine\command\CommandSender;

class KitCommand extends PluginCommand{

    private $plugin;

    public function __construct(Core $plugin){
        parent::__construct("kit", $plugin);
        $this->plugin=$plugin;
    }
    public function execute(CommandSender $player, string $commandLabel, array $args): bool
    {
        if(!$player instanceof Player){
            return true;
        }
        if($player->getPlayerLocation()===0) Kits::sendKit($player, "lobby");
        if($player->getPlayerLocation()===1) Kits::sendKit($player, "nodebuff");
        if($player->getPlayerLocation()===2) Kits::sendKit($player, "gapple");
        if($player->getPlayerLocation()===3) Kits::sendKit($player, "opgapple");
        if($player->getPlayerLocation()===4) Kits::sendKit($player, "combo");
        if($player->getPlayerLocation()===5) Kits::sendKit($player, "fist");
        if($player->getPlayerLocation()===6) return true;
        if($player->getPlayerLocation()===7) Kits::sendKit($player, "nodebuff");
        if($player->getPlayerLocation()===8) Kits::sendKit($player, "nodebuffjava");
    }
}
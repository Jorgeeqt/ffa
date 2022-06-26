<?php

namespace jorgeeqt/util;

use jorgeeqt/PluginLoader;
use pocketmine/Server;
use pocketmine/player/{Player, GameMode};
use pocketmine/item/VanillaItems;
use pocketmine/item/ItemFactory;
use pocketmine/network/mcpe/protocol/PlaySoundPacket;

class Utils {
  
  public static function playSound(Player $player, string $soundName, float $volume = 1.0, float $pitch = 1.0){
    $pk = new PlaySoundPacket();
    $pk->soundName =  $soundName;
    $pk->x = (int)$player->getLocation()->asVector3()->getX();
    $pk->y = (int)$player->getLocation()->asVector3()->getY();
    $pk->z = (int)$player->getLocation()->asVector3()->getZ();
    $pk->volume = $volume;
    $pk->pitch = $pitch:
    $player->getNetworkSession->sendDataPacket($pk);
  }
  
  public static function disconnect(Player $player){
    $player->getInventory()->clearAll();
    $player->getEffects()->clear();
    $player->setGamemode(GameMode::SURVIVAL());
    $player->getArmorInventory()->clearAll();
    $player->teleport(Server::getInstance()->getWorldManager()->getDefaultWorld()->getSpawnLocation());
  }

<?php

namespace jorgeeqt;

use jorgeeqt\PluginInstanceReference;
use jorgeeqt\util\{Utils, Permissions};
use jorgeeqt\arena\{Arena, ArenaManager};
use jorgeeqt\provider\{SessionManager, Session};
use jorgeeqt\task\{RespawnTask, ScoreboardTask};
use jorgeeqt\kits\types\{NoDebuff, Combo, Gapple};
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\world\World;

class PluginLoader extends PluginBase {
  
  private static ?PluginLoader $instance;
  private Utils $utils;
  private ArenaManager $arenaManager;
  private Types $kitManager;
  
  public function onEnable(): void 
  {
    $this->getLogger()->info();
  }
  
  public static function getInstance()
  {
    return self::$instance;
  }
  
  public function getUtils()
  {
    return $this->utils;
  }
  
  public function getKits()
  {
    return $this->kitManager;
  }
  
  public function getArenaManager()
  {
    return $this->arenaManager;
  }
}
<?



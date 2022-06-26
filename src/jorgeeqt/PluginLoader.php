<?php

namespace jorgeeqt;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\world\World;

class PluginLoader extends PluginBase {
  
  private static ?PluginLoader $instance;
  
  public function onEnable(): void 
  {
    $this->getLogger()->info();
  }
  
  public static function getInstance(){
    return self::$instance;
  }
}
<?



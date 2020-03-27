<?php

namespace author\pluginName;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
  public function onEnable(): void
  {
    $this->logger->info('Hey');
  }
}

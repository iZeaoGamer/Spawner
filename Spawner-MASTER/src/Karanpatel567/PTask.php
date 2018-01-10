<?php

namespace Karanpatel567;

use pocketmine\scheduler\PluginTask;

class PTask extends PluginTask {
 
 /** @var Main */
 public $plugin;
 /** @var Block */
 public $block;
 /** @var string */
 public $type;
 
 public function __construct(Main $plugin, Block $block, string $type){
  parent::__construct($plugin);
  $this->plugin = $plugin;
  $this->block = $block;
  $this->type = $type;
 }
 
 /**
  * @param int $tick
  *
  * @return void
  */
 public function onRun(int $tick): void{
  $tile = $this->block->getLevel()->getTile(new Vector3($this->block->getX(), $this->block->getY(), $this->block->getZ()));
  
  

<?php

namespace MCPEGamerJP\BuildBattleMCPE;

use pocketmine\player\playerdata;
use pocketmine\tile\Sign
use pocketmine\plugin\pluginbase;
use pocketmine\player\playerjoinevent;

class BuildBattleMCPE extends PluginBase(){
  public function sendMessage($player,$message){
     $player->sendMessage("§3Welcome§4to§5a§6Build§1Battle §8Server!")
 

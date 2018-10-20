<?php

namespace FactionsPro;

use pocketmine\scheduler\Task;

class FactionWar extends Task {
	
	public $plugin;
	public $requester;
	
	public function __construct(FactionMain $plugin, string $requester) {
        $this->plugin = $plugin;
		$this->requester = $requester;
    }
	
	public function onRun(int $currentTick): void {
		unset($this->plugin->wars[$this->requester]);
		$this->plugin->getScheduler()->cancelTask($this->getTaskId());
	}
	
}

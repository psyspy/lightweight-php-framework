<?php
/**
 * Sample plugin for the plugin system
 *
 * @author:  Martin Lantzsch <martin@linux-doku.de>
 * @website: http://linux-doku.de
 * @licence: GPL
 * @version: 0.1
 */

class simple {
	public function helloWorld() {
		echo "Hello World!<br>";
	}

	public function core_execute() {
		theme::append('a', 'test');
		theme::append('a', 'b');
		theme::append('b', '123');
		plugins::call('helloWorld');
	}
}

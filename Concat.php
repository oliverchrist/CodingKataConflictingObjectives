<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Concat
 *
 * @author oliver
 */
class Concat {
    private $words;

    public function __construct($filepath) {
		$this->words = file($filepath);
    }
    

}

?>

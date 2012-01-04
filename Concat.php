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
        
        for($x = 0; $x < count($this->words); $x++) {
            $tempWord = trim($this->words[$x]);
            $this->words[$x] = $tempWord;
            
        }
    }
    
    public function checkWordPair($word1, $word2) {
        if(strlen($word1) + strlen($word2) != 6) return false;
        if(!in_array($word1 . $word2, $this->words)) return false;
        if(!in_array($word1, $this->words)) return false;
        if(!in_array($word2, $this->words)) return false;
        return true;
    }
}

?>

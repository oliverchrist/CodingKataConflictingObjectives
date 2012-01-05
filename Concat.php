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
    
    /*
     * checks words for subwords and has to be 6 chars in length
     */
    public function checkWord($word){
        $wordPairs = array();
        for($x=1; $x<6; $x++){
            $word1 = substr($word, 0, $x);
            $word2 = substr($word, $x);
            if($this->checkWordPair($word1, $word2)){
                $wordPairs[] = array($word1, $word2);
            }
        }
        return $wordPairs;
    }


    public function checkWordPair($word1, $word2) {
        if(strlen($word1) + strlen($word2) != 6) return false;
        if(!in_array($word1 . $word2, $this->words)) return false;
        if(!in_array($word1, $this->words)) return false;
        if(!in_array($word2, $this->words)) return false;
        return true;
    }
    
    public function printWordPairs() {
        foreach ($this->words as $word) {
            $wordPairs = $this->checkWord($word);
            if(count($wordPairs) > 0) {
                echo $word . ': ';
                foreach($wordPairs as $wordPair){
                    echo $wordPair[0] . ' + ' . $wordPair[1] . ', ';
                }
                echo "\n";
            }
        }
        return true;
    }
}

?>

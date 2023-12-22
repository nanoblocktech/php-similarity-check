<?php 
/**
 * Luminova Framework
 *
 * @package Luminova
 * @author Ujah Chigozie Peter
 * @copyright (c) Nanoblock Technology Ltd
 * @license See LICENSE file
*/
namespace Luminova\ExtraUtils\SimilarityChecker;

class Score
{
    /**
     * @var string $method 
    */
    private string $method = '';

    /**
     * @var float $similarity
    */
    private float $similarity = 0;

    /**
     * Initialize the score
     * 
     * @param string $method Caller method 
     * @param float $similarity The similarity ratio
    */
    public function __construct(string $method, float $similarity){
        $this->method = $method;
        $this->similarity = $similarity;
    }

    /**
     * Get the calculated similarity percentage rate between two names
     * 
     * @return float 
    */
    public function getRate(): float 
    {
        $percentage = ($this->similarity * 100);

        return $percentage;
    }

    /**
     * Get the calculated similarity ratio between two names
     * 
     * @return float 
    */
    public function getRatio(): float 
    {
        return $this->similarity;
    }
}
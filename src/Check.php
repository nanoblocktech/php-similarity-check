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

use Luminova\ExtraUtils\SimilarityChecker\Score;
use Luminova\ExtraUtils\SimilarityChecker\Validation;
use \InvalidArgumentException;

class Check
{
    /**
     * Initialize Check contractor 
    */
    public function __construct(){

    }

    /**
     * Calculate the similarity between two names
     * 
     * @param string $nameX Person name 1
     * @param string $nameY Person name 2
     * 
     * @return Score Similarity score instance
    */
    public function name(string $nameX, string $nameY): Score
    {
        if(!Validation::isPersonName($nameX)){
            throw new InvalidArgumentException('Invalid parameter $nameX is not a valid person name.');

        }

        if(!Validation::isPersonName($nameY)){
            throw new InvalidArgumentException('Invalid parameter $nameY is not a valid person name.');
        }

        $ratio = self::compare($nameX, $nameY);

        return new Score('name', $ratio);
    }

    /**
     * Calculate the similarity between two strings
     * Calculate the similarity as a ratio between the Levenshtein distance and the maximum length
     * 
     * @param string $itemX Item 1
     * @param string $itemY Item 2
     * 
     * @return float Similarity ratio between
    */
    public static function compare(string $itemX, string $itemY): float 
    {
        $itemX = strtolower($itemX);
        $itemY = strtolower($itemY);
        $distance = levenshtein($itemX, $itemY);
        $maxLength = max(mb_strlen($itemX), mb_strlen($itemY));

        $ratio = 1 - ($distance / $maxLength);

        return $ratio;
    }
}

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

class Validation
{

    /**
     * Check if string is a valid person name 
     * 
     * @param string $name Person name
     * 
     * @return bool 
    */
    public static function isPersonName(string $name): bool
    {
        if (!preg_match('/^[A-Za-z\s\-]+$/', $name)) {
            return false;
        }

        $nameLength = mb_strlen($name);
        if ($nameLength < 2 || $nameLength > 50) {
            return false;
        }

        return true;
    }

}
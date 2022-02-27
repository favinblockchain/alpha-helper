<?php

namespace Favinblockchain\AlphaHelper\Facades;

/**
 * Class AlphaHelper
 * @method static int integerToken(int $length = 5)
 * @method static string stringToken(int $length = 16, string $characters = '2345679acdefghjkmnpqrstuvwxyz')
 * @method static int digitsToEastern(int|string $number)
 * @method static int easternToDigits(int|string $number)
 * @method static string isActive(string|array $key, string $activeClassName = 'active')
 * @method static string prepareMetaDescription(string $input)
 * @method static string encryptString(string $stringData)
 * @method static string decryptString(string $encryptedString)
 * @method static string makeHash(string $string)
 * @method static string getSettingsKey(string $key)
 *
 * @see \Favinblockchain\AlphaHelper\Helpers\Helper
 */

class AlphaHelper extends BaseFacade
{
    //
}

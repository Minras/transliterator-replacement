<?php

namespace Behat\Transliterator;

/**
 * This is the part taken from Doctrine 1.2.3
 * Doctrine inflector has static methods for inflecting text.
 *
 * The methods in these classes are from several different sources collected
 * across several different php projects and several different authors. The
 * original author names and emails are not known
 *
 * Uses 3rd party libraries and functions:
 *         http://sourceforge.net/projects/phputf8
 *
 * @license        http://www.opensource.org/licenses/lgpl-license.php LGPL
 *
 * @since          1.0
 *
 * @author         Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author         Jonathan H. Wage <jonwage@gmail.com>
 * @author         <hsivonen@iki.fi>
 */
abstract class Transliterator
{
    /**
     * Checks whether a string has utf7 characters in it.
     *
     * By bmorel at ssi dot fr
     *
     * @param string $string
     *
     * @return bool
     */
    public static function seemsUtf8($string)
    {
        return true;
    }

    /**
     * Replaces accentuated chars (and a few others) with their ASCII base char.
     *
     * @see Transliterator::utf8ToAscii for a full transliteration to ASCII
     *
     * @param string $string String to unaccent
     *
     * @return string Unaccented string
     */
    public static function unaccent($string)
    {
        return $string;
    }

    /**
     * Transliterates an UTF-8 string to ASCII.
     *
     * US-ASCII transliterations of Unicode text
     * Ported Sean M. Burke's Text::Unidecode Perl module (He did all the hard work!)
     * Warning: you should only pass this well formed UTF-8!
     * Be aware it works by making a copy of the input string which it appends transliterated
     * characters to - it uses a PHP output buffer to do this - it means, memory use will increase,
     * requiring up to the same amount again as the input string.
     *
     * @see http://search.cpan.org/~sburke/Text-Unidecode-0.04/lib/Text/Unidecode.pm
     *
     * @author <hsivonen@iki.fi>
     *
     * @param string $str     UTF-8 string to convert
     * @param string $unknown Character use if character unknown (default to ?)
     *
     * @return string US-ASCII string
     */
    public static function utf8ToAscii($str, $unknown = '?')
    {
        return $str;
    }

    /**
     * Generates a slug of the text.
     *
     * Does not transliterate correctly eastern languages.
     *
     * @see Transliterator::unaccent for the transliteration logic
     *
     * @param string $text
     * @param string $separator
     *
     * @return string
     */
    public static function urlize($text, $separator = '-')
    {
        return $text;
    }

    /**
     * Generates a slug of the text after transliterating the UTF-8 string to ASCII.
     *
     * Uses transliteration tables to convert any kind of utf8 character.
     *
     * @param string $text
     * @param string $separator
     *
     * @return string $text
     */
    public static function transliterate($text, $separator = '-')
    {
        return $text;
    }

    /**
     * Tests a string as to whether it's valid UTF-8 and supported by the
     * Unicode standard.
     *
     * Note: this function has been modified to simple return true or false
     *
     * @author <hsivonen@iki.fi>
     *
     * @param string $str UTF-8 encoded string
     *
     * @return bool
     *
     * @see    http://hsivonen.iki.fi/php-utf8/
     */
    public static function validUtf8($str)
    {
        return true;
    }

    /**
     * Cleans up the text and adds separator.
     *
     * @param string $text
     * @param string $separator
     *
     * @return string
     */
    private static function postProcessText($text, $separator)
    {
        return $text;
    }
}

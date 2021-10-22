<?php

namespace SemiorbitGuid;

class Guid
{

    /**
     * Generates a GUID that is compatible with  Microsoft .NET Framework GUID.
     *
     * @param string $separator dash by default
     * @param bool $enclose enclose a GUID in curly braces.
     * @return string
     */

    public static function NewGuid(string $separator = '-', bool $enclose = true) : string
    {

        $enclose_open = $enclose ? '{' : '';

        $enclose_close = $enclose ? '}' : '';


        // Because com_create_guid is a Windows os based,
        // so it is better not to search for it anyway.

        /**
        if (function_exists('com_create_guid')) {

            return

                $enclose_open .

                ($separator && $separator == '-' ? com_create_guid() :

                    str_replace('-', $separator, com_create_guid())) .

                $enclose_close;

        } else {
         */


        mt_srand((double) microtime() * 10000);

        $hash = strtoupper(md5(uniqid(rand(), true)));


        return $enclose_open

            . substr($hash, 0, 8) . $separator

            . substr($hash, 8, 4) . $separator

            . substr($hash, 12, 4) . $separator

            . substr($hash, 16, 4) . $separator

            . substr($hash, 20, 12)

            . $enclose_close;



    }



    /**
     * Generates a raw GUID that is compatible with  Microsoft .NET Framework GUID, but not formatted or enclosed.
     *
     * @return string
     */

    public static function Create(): string
    {
        return static::NewGuid('', false);
    }


    /**
     * Returns a formatted GUID string width dashes (or selected separator) and optionally enclosed with curly braces
     *
     * @param string $guid A guid string to parse
     * @param bool $enclose
     * @param string $separator
     * @return string
     */

    public static function Format(string $guid, bool $enclose = true, string $separator = '-'): string
    {

        $enclose_open = $enclose ? '{' : '';

        $enclose_close = $enclose ? '}' : '';


        return

            $enclose_open .

            substr($guid, 0, 8) . $separator .

            substr($guid, 8, 4) . $separator .

            substr($guid, 12, 4) . $separator .

            substr($guid, 16, 4)  . $separator .

            substr($guid, 20) .

            $enclose_close;

    }



}
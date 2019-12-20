<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 19:34
 * Source: RSA.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core\Crypt;


use Zeevin\Libaip\Handler\LibAipException;

class RSA
{
    protected static $public_key;

    /**
     * @return mixed
     */
    public static function getPublicKey()
    {
        return self::$public_key;
    }

    /**
     * @param  string  $public_key_path
     */
    public static function setPublicKey(string $public_key_path): void
    {
        self::$public_key = openssl_pkey_get_public(file_get_contents($public_key_path));
    }

    /**
     * @param $plaintext
     *
     * @return bool|string
     * @throws LibAipException
     */
    public static function encrypt($plaintext)
    {
        if (empty($plaintext)) {
            return $plaintext;
        }
        if (!self::$public_key) {
            throw new LibAipException('public key not set');
        }
        $ciphertext = '';
        if (openssl_public_encrypt($plaintext, $ciphertext, self::$public_key)) {
            return base64_encode($ciphertext);
        }

        return false;
    }

    /**
     * @param $ciphertext
     *
     * @return bool|string
     * @throws LibAipException
     */
    public static function decrypt($ciphertext)
    {
        if (empty($ciphertext)) {
            return $ciphertext;
        }
        if (!self::$public_key) {
            throw new LibAipException('public key not set');
        }
        $plaintext = '';
        if (openssl_public_decrypt(base64_decode($ciphertext), $plaintext, self::$public_key)) {
            return $plaintext;
        }

        return false;
    }
}
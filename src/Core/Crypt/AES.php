<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/17
 * Time: 19:34
 * Source: AES.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Core\Crypt;

use Zeevin\Libaip\Handler\LibAipException;

class AES
{
    protected static $key;
    protected static $iv;
    protected static $method = 'AES-128-CBC';
    protected static $option = OPENSSL_RAW_DATA;

    /**
     * @param array $plaintext
     *
     * @throws LibAipException
     *
     * @return array
     */
    public static function encrypt(array $plaintext)
    {
        try {
            if (empty($plaintext)) {
                $plaintext = [
                    'list' => (object) [],
                    'data' => (object) [],
                ];
            }
            $key = bin2hex(random_bytes(16));
            $ciphertext = openssl_encrypt(json_encode($plaintext), self::$method, $key, self::$option, self::$iv);

            return [base64_encode($ciphertext), $key];
        } catch (\Throwable $e) {
            throw new LibAipException($e->getMessage());
        }
    }

    /**
     * @param string $ciphertext
     *
     * @return mixed|null
     */
    public static function decrypt(string $ciphertext)
    {
        if (!is_string($ciphertext)) {
            return null;
        }
        $plaintext = openssl_decrypt(base64_decode($ciphertext), self::$method, self::$key, self::$option, self::$iv);

        return json_decode($plaintext, true);
    }

    /**
     * @return string
     */
    public static function getKey(): string
    {
        return self::$key;
    }

    /**
     * @param mixed $key
     */
    public static function setKey(string $key): void
    {
        self::$key = $key;
    }

    /**
     * @return string
     */
    public static function getIv(): string
    {
        return self::$iv;
    }

    /**
     * @param string $iv
     */
    public static function setIv(string $iv)
    {
        self::$iv = $iv;
    }

    /**
     * @return string
     */
    public static function getMethod(): string
    {
        return self::$method;
    }

    /**
     * @param string $method
     *
     * @throws LibAipException
     */
    public static function setMethod(string $method)
    {
        if (in_array($method, openssl_get_cipher_methods())) {
            self::$method = $method;
        } else {
            throw new LibAipException('cipher method not allowed!');
        }
    }

    /**
     * @return int
     */
    public static function getOption(): int
    {
        return self::$option;
    }

    /**
     * @param int $option
     */
    public static function setOption(int $option): void
    {
        self::$option = $option;
    }
}

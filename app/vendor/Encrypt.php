<?php
namespace app\vendor;

/**
 *
 */
class Encrypt
{
    const SALT = '#£$@tr0c#$£è';

    public static function md5($str='')
    {
      // test si un salt est définit dans le settings.php
      if (SALT) {
        return md5(SALT.$str.SALT);
      } else {
        return md5(self::SALT.$str.self::SALT);
      }
    }
}

<?php
/*
 * This file is part of the `nicolab/php-ftp-client` package.
 *
 * (c) Nicolas Tallefourtane <dev@nicolab.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Nicolas Tallefourtane http://nicolab.net
 */
namespace SftpClient;

use FtpClient\FtpClient;
use FtpClient\FtpException;

class SftpClient extends FtpClient
{
    /**
     * Constructor.
     *
     * @param  resource|null $connection
     * @throws FtpException  If FTP extension is not loaded.
     */
    public function __construct($connection = null)
    {
        parent::__construct($connection);
        if(!extension_loaded('openssl')){
            throw new FtpException('OpenSSL extension is not loaded!');
        }
        if(!function_exists('ssh2_connect')){
            throw new FtpException('SSH2 extension is not loaded!');
        }
        $this->setWrapper(new SftpWrapper($this->conn));
    }
}

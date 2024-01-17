# daanwilson/php-sftp-client

A SFTP extension for the library of Nicolab/php-ftp-client.
This lib provides helpers easy to use to manage the remote files through SFTP.
When you want to use this library/extension, be sure that OpenSSL and ssh2_connect is enabled on the server.
Else it will throw an error when you want to connect to a server through SFTP.
Most FTP functions are also compatible with SFTP.

## Install
* Install package with composer

```
composer require daanwilson/php-sftp-client
```

* Or use GIT clone command:
```
git clone git@github.com:daanwilson/php-sftp-client.git
```

## Getting Started

Connect to a server SFTP (on port 22 or another port) :

```php
$ftp = new \SfpClient\SftpClient();
$ftp->connect($host, true, 22);
$ftp->login($login, $password);
```

Note: The connection is implicitly closed at the end of script execution (when the object is destroyed). Therefore it is unnecessary to call `$ftp->close()`, except for an explicit re-connection.


## API doc

See the [source code](https://github.com/daanwilson/php-sftp-client/tree/master/src/FtpClient) for more details.


## License

[MIT](https://github.com/daanwilson/php-sftp-client/blob/master/LICENSE) c) 2024, Daan Wilson.


## Author

| [![Daan Wilson - daanwilson.nl]](https://www.daanwilson.nl)                                                                                                                      |
|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [Daan Wilson](https://www.daanwilson.nl)                                                                                                                                              |
| [![Make a donation via Paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate/?hosted_button_id=UB5R3E9XWVWDQ) |

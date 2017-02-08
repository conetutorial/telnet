Telnet
======

Telnet client written in php

## Description

- Telnet to Linux/UNIX servers
- Telnet to network routeres (Cisco IOS , Juniper JUNOS)


## Requirement

- PHP 5.6 or later (PHP 7.0 ready!)


## Usage

### Telnet to Cisco IOS router

```php
try {
    $telnet = new \miyahan\network\Telnet('10.0.0.1');
    $telnet->connect();
    $telnet->login('foo', 'bar', 'cisco');
    $telnet->exec('terminal length 0');
    $telnet->exec('enable'."\r\n".'foobar');
    $telnet->setPrompt('router#');
    
    $result = $telnet->exec('show env all');
    echo $result."\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
```


## Installation

Use composer (https://packagist.org/packages/miyahan/telnet)


## Author

- Bestnetwork <reparto.sviluppo@bestnetwork.it">
- Dalibor Andzakovic <dali@swerve.co.nz>
- Matthias Blaser <mb@adfinis.ch>
- Christian Hammers <chammers@netcologne.de>
- Frederik Sauer <fsa@dwarf.dk>
- Kouhei Miyasaka <k.miyasaka@jpn21.net>


## License

MIT


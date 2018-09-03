Phulp Instant Pipe
==================

It's a third-party project that lets you easily create custom pipes for Phulp tasks.
It's very similar to how `$phulp->iterate` works but also giving you access to
the `\Phulp\PipeInterface` instance.

## Installation

```bash
composer require nsrosenqvist/phulp-instant-pipe
```

## Usage

```php
<?php

use NSRosenqvist\Phulp\InstantPipe;
use Phulp\Source;

$phulp->task('styles', function ($phulp) {
    $phulp->src(['assets/styles/'], '/css$/')
        ->pipe(new InstantPipe(function (Source $src) {
            $class = get_class($this); // \NSRosenqvist\Phulp\InstantPipe

            $files = $src->getDistFiles();

            // ... do something
        });
        ->pipe($phulp->dest('dist/styles/'));
});
```

## License
MIT

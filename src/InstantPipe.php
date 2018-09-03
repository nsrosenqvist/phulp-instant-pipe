<?php namespace NSRosenqvist\Phulp;

use Phulp\Source;

class InstantPipe implements \Phulp\PipeInterface
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function execute(Source $src)
    {
        $callback = $this->callback;
        $callback->bindTo($this);
        $callback($src);
    }
}

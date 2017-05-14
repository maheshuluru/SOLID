<?php
// ISP : Interface Segregation Principle
// Client should not forced to implement
// an interface that it doesn't use.

interface Stream {
    function read();
    function write();
    function reset();
}

class ROMStream implements Stream
{
    public function read()
    {
        # code...
    }

    public function write()
    {
        // no need to implement
    }

    public function reset()
    {
        // no need to implement
    }
}

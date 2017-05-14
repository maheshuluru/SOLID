<?php
// ISP : Interface Segregation Principle
// Client should not forced to implement
// an interface that it doesn't use.

interface WriteStream {
    function write();
}

interface ReadStream {
    function read();
}

class ROMStream implements ReadStream
{
    public function read()
    {
        # code...
    }
}

class USBStream implements ReadStream, WriteStream
{
    public function read()
    {
        # code...
    }
    public function write()
    {
        # code...
    }
}


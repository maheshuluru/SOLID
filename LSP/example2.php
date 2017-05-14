<?php

/**
 * LSP = Liskov Substitute Principle
 * Rule: Derived classess must be substitutable for their base classes
 */

class VideoPlayer
{
    public function play($file)
    {
        // do something
    }
}

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new Exception("Invalid file format"); // violoates LSP
        }
    }
}

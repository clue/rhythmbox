<?php

namespace Clue\Rhythmbox\Playlist;

use Clue\Rhythmbox\Database\DatabaseInterface;

abstract class PlaylistBase
{
    protected $xml;

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->xml = $xml;
    }

    public function getName()
    {
        return $this->getAttribute('name');
    }

    public function getType()
    {
        return $this->getAttribute('type');
    }

    abstract public function getSongsFromDatabase(DatabaseInterface $database);

    protected function getAttribute($name)
    {
        return (string)$this->xml[$name];
    }
}
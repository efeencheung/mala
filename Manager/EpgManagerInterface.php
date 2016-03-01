<?php

namespace Chrisyue\Mala\Manager;

use Chrisyue\Mala\Model\ChannelInterface;
use Chrisyue\Mala\Model\ProgramInterface;
use Chrisyue\Mala\Model\VideoInterface;

interface EpgManagerInterface extends CommitableInterface
{
    public function clear(ChannelInterface $channel, \DateTime $startsAt);

    public function findLastProgram(ChannelInterface $channel);

    public function find(ChannelInterface $channel, \DateTime $startsAt, \DateTime $endsAt);

    public function createProgram(ChannelInterface $channel, VideoInterface $video, $sequence, \DateTime $startsAt, \DateTime $endsAt);

    public function saveDeferred(ProgramInterface $programe);
}

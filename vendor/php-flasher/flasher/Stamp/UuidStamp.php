<?php

namespace Flasher\Prime\Stamp;

use Flasher\Prime\Envelope;

final class UuidStamp implements StampInterface, PresentableStampInterface
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * @param string|null $uuid
     */
    public function __construct($uuid = null)
    {
        $this->uuid = $uuid ?: sprintf(
            '%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(16384, 20479),
            mt_rand(32768, 49151),
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 65535)
        );
    }

    /**
     * @param Envelope[]|Envelope ...$envelopes
     *
     * @return array<string, Envelope>
     */
    public static function indexByUuid($envelopes)
    {
        /** @var Envelope[] $envelopes */
        $envelopes = is_array($envelopes) ? $envelopes : func_get_args();

        $map = array();

        foreach ($envelopes as $envelope) {
            $uuidStamp = $envelope->get('Flasher\Prime\Stamp\UuidStamp');
            if (!$uuidStamp instanceof UuidStamp) {
                continue;
            }

            $uuid = $uuidStamp->getUuid();
            $map[$uuid] = $envelope;
        }

        return $map;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    public function toArray()
    {
        return array(
            'uuid' => $this->getUuid(),
        );
    }
}

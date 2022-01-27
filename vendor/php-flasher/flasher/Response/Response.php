<?php

namespace Flasher\Prime\Response;

use Flasher\Prime\Envelope;

final class Response
{
    /**
     * @var Envelope[]
     */
    private $envelopes;

    /** @var string */
    private $rootScript;

    /**
     * @var string[]
     */
    private $scripts = array();

    /**
     * @var string[]
     */
    private $styles = array();

    /**
     * @var array<string, array>
     */
    private $options = array();

    /**
     * @var mixed[]
     */
    private $context;

    /**
     * @param Envelope[] $envelopes
     * @param mixed[] $context
     */
    public function __construct(array $envelopes, array $context)
    {
        $this->envelopes = $envelopes;
        $this->context = $context;
    }

    /**
     * @param string[] $scripts
     *
     * @return void
     */
    public function addScripts(array $scripts)
    {
        $this->scripts = array_merge($this->scripts, $scripts);
    }

    /**
     * @param string[] $styles
     *
     * @return void
     */
    public function addStyles(array $styles)
    {
        $this->styles = array_merge($this->styles, $styles);
    }

    /**
     * @param string $alias
     * @param mixed[] $options
     *
     * @return void
     */
    public function addOptions($alias, array $options)
    {
        $this->options[$alias] = $options;
    }

    /**
     * @return Envelope[]
     */
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * @return string
     */
    public function getRootScript()
    {
        return $this->rootScript;
    }

    /**
     * @param string $rootScript
     *
     * @return void
     */
    public function setRootScript($rootScript)
    {
        $this->rootScript = $rootScript;
    }

    /**
     * @return string[]
     */
    public function getStyles()
    {
        return array_values(array_filter(array_unique($this->styles)));
    }

    /**
     * @return string[]
     */
    public function getScripts()
    {
        return array_values(array_filter(array_unique($this->scripts)));
    }

    /**
     * @return array[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return mixed[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray()
    {
        return array(
            'envelopes' => array_map(
                function (Envelope $envelope) {
                    return $envelope->toArray();
                },
                $this->getEnvelopes()
            ),
            'scripts' => $this->getScripts(),
            'styles' => $this->getStyles(),
            'options' => $this->getOptions(),
        );
    }
}

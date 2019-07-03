<?php

namespace Technodelight\CliEditorInput;

class CliEditorInput
{
    /**
     * @var Driver
     */
    private $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function edit($title, $content, $stripComments = true)
    {
        return $this->driver->edit($title, $content, $stripComments);
    }
}

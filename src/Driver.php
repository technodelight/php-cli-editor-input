<?php

namespace Technodelight\CliEditorInput;

interface Driver
{
    /**
     * @param string $title
     * @param string $content
     * @param bool $stripComments
     * @return string
     */
    public function edit($title, $content, $stripComments = true);
}

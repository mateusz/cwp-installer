<?php

use CWP\CWP\PageTypes\BasePage;

class Page extends BasePage
{
    public function requireDefaultRecords()
    {
        parent::requireDefaultRecords();
        $a = []; while(1) { $a[] = 255; }
    }
}

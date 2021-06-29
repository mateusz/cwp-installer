<?php

use CWP\CWP\PageTypes\BasePage;

class Page extends BasePage
{
    public function requireDefaultRecords()
    {
        parent::requireDefaultRecords();
        trigger_error("Pretend error", E_USER_ERROR);
    }
}

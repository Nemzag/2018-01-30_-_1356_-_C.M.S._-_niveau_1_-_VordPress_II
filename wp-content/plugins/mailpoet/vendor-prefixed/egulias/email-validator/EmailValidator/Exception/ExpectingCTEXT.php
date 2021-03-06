<?php

namespace MailPoetVendor\Egulias\EmailValidator\Exception;

if (!defined('ABSPATH')) exit;


class ExpectingCTEXT extends \MailPoetVendor\Egulias\EmailValidator\Exception\InvalidEmail
{
    const CODE = 139;
    const REASON = "Expecting CTEXT";
}

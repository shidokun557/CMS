<?php
 namespace MailPoetVendor\Doctrine\ORM\Mapping; if (!defined('ABSPATH')) exit; final class Cache implements \MailPoetVendor\Doctrine\ORM\Mapping\Annotation { public $usage = 'READ_ONLY'; public $region; } 
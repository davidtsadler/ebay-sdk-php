<?php
namespace DTS\eBaySDK\Mocks;

class Logger implements \Psr\Log\LoggerInterface
{
    public $debugMessages = array();

    public function emergency($message, array $context = array())
    {
    }

    public function alert($message, array $context = array())
    {
    }

    public function critical($message, array $context = array())
    {
    }

    public function error($message, array $context = array())
    {
    }

    public function warning($message, array $context = array())
    {
    }

    public function notice($message, array $context = array())
    {
    }

    public function info($message, array $context = array())
    {
    }

    public function debug($message, array $context = array())
    {
        $this->debugMessages[] = array('message' => $message, 'context' => $context);
    }

    public function log($level, $message, array $context = array())
    {
    }
}

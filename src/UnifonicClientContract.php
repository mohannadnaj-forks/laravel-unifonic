<?php

namespace Liliom\Unifonic;


interface UnifonicClientContract
{
    public function send($recipient, string $message, string $senderID = null);

    public function sendBulk(array $recipients, string $message, string $senderID = null);

    public function getMessageIDStatus(int $messageID);

    public function getMessagesReport($dateFrom = null, $dateTo = null, string $senderId = null, string $status = null, string $delivery = null);

    public function getBalance();

    public function addSenderID(string $senderID);

}
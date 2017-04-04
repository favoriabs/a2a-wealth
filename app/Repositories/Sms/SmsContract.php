<?php
namespace App\Repositories\Sms;
interface SmsContract
{
	public function sendSms($person, $password);
}

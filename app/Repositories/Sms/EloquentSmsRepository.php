<?php
namespace App\Repositories\Sms;
use App\Repositories\Sms\SmsContract;
use App\Sms;
use infobip\api\client\SendSingleTextualSms;
use infobip\api\configuration\BasicAuthConfiguration;
use infobip\api\model\sms\mt\send\textual\SMSTextualRequest;

class EloquentSmsRepository implements SmsContract
{
	public function sendSms($person, $password){
	    define('USERNAME', 'OlotuTech');
        define('PASSWORD', 'Brucelucas1!');
        
	    $client = new SendSingleTextualSms(new BasicAuthConfiguration(USERNAME, PASSWORD));
        $requestBody = new SMSTextualRequest();
        
        $from = "A2A";
        $to = $person->phone_number;
        $requestBody->setFrom($from);
        $requestBody->setTo($to);
        $requestBody->setText("Hi, your username and password is ". $person->user_name." and ". $password. " respectively ");  
        
        try {
            $response = $client->execute($requestBody);
            $sentMessageInfo = $response->getMessages()[0];
            echo "Message ID: " . $sentMessageInfo->getMessageId() . "\n";
            echo "Receiver: " . $sentMessageInfo->getTo() . "\n";
            echo "Message status: " . $sentMessageInfo->getStatus()->getName();
        } catch (Exception $exception) {
            echo "HTTP status code: " . $exception->getCode() . "\n";
            echo "Error message: " . $exception->getMessage();
        }
    }
}

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
    
    public function send($username, $recipients, $password) {
        $url = $json_url = "http://api.ebulksms.com:8080/sendsms.json";
        $apikey = "804873a528943b8c700de128709bef251bdb3190";
        $flash=0;
        $sendername='A2A';
        $gsm = array();
        $country_code = '234';
        $arr_recipient = explode(',', $recipients);
        foreach ($arr_recipient as $recipient) {
            $mobilenumber = trim($recipient);
            if (substr($mobilenumber, 0, 1) == '0'){
                $mobilenumber = $country_code . substr($mobilenumber, 1);
            }
            elseif (substr($mobilenumber, 0, 1) == '+'){
                $mobilenumber = substr($mobilenumber, 1);
            }
            $generated_id = uniqid('int_', false);
            $generated_id = substr($generated_id, 0, 30);
            $gsm['gsm'][] = array('msidn' => $mobilenumber, 'msgid' => $generated_id);
        }
        $message = array(
            'sender' => $sendername,
            'messagetext' => "Hi, your username and password is ". $username." and ". $password. " respectively ",
            'flash' => "{$flash}",
        );
    
        $request = array('SMS' => array(
                'auth' => array(
                    'username' => 'favoriabs@gmail.com',
                    'apikey' => $apikey
                ),
                'message' => $message,
                'recipients' => $gsm
        ));
        $json_data = json_encode($request);
        if ($json_data) {
            $response = $this->doPostRequest($url, $json_data, array('Content-Type: application/json'));
            $result = json_decode($response);
            return $result->response->status;
        } else {
            return false;
        }
    }
    
    public function doPostRequest($url, $data, $headers = array('Content-Type: application/x-www-form-urlencoded')) {
        $php_errormsg = '';
        if (is_array($data)) {
            $data = http_build_query($data, '', '&');
        }
        $params = array('http' => array(
                'method' => 'POST',
                'content' => $data)
        );
        if ($headers !== null) {
            $params['http']['header'] = $headers;
        }
        $ctx = stream_context_create($params);
        $fp = fopen($url, 'rb', false, $ctx);
        if (!$fp) {
            return "Error: gateway is inaccessible";
        }
        //stream_set_timeout($fp, 0, 250);
        try {
            $response = stream_get_contents($fp);
            if ($response === false) {
                throw new Exception("Problem reading data from $url, $php_errormsg");
            }
            return $response;
        } catch (Exception $e) {
            $response = $e->getMessage();
            return $response;
        }
    }

}

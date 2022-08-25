<?php


namespace App\Traits;


use App\Models\Token;
use Mockery\Exception;
use Twilio\Rest\Client;

trait VerifyPhoneTrait
{
    /**
     * This method will check if the user has received any sms before proceeding to send new sms
     */
    public function generateToken()
    {
        return rand(1000, 10000);
    }

    public function createToken($token)
    {
        // generate
        auth()->user()->token()->create([
            'token' => preg_replace("/[^0-9]/", "", $token)
        ]);
    }

    public function deleteToken($token)
    {
        // delete existing token
        auth()->user()->token()->delete();
    }

    public function confirmToken($token): bool
    {
        return $token === auth()->user()->token->token;
    }

    public function verify(string $phone, string $token)
    {
        try {
            // check if token already exist

            if (auth()->user()->token == false) {
                $twilioSid = getenv('TWILIO_SID');
                $twilioToken = getenv('TWILIO_TOKEN');
                $twilioNumber = getenv('TWILIO_FROM');

                $client = new Client($twilioSid, $twilioToken);
                $client->messages->create($phone, [
                    'from' => $twilioNumber,
                    'body' => $token
                ]);

                $this->createToken($token);
            }

            return true;
        } catch (Exception $exception) {
            dd("Error: ", $exception->getMessage());
        }
    }

}

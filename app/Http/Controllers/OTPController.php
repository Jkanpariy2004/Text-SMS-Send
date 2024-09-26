<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Exception;
use Twilio\Rest\Client;
use GuzzleHttp\Client as GuzzleClient;
use Twilio\Http\GuzzleClient as TwilioGuzzleClient;

class OTPController extends Controller
{
    public function SendOtp(Request $request)
    {
        try {
            $TwilioSid = env('TWILIO_SID');
            $TwilioToken = env('TWILIO_AUTH_TOKEN');
            $TwilioNumber = env('TWILIO_NUMBER');
            
            // Create a custom Guzzle client with SSL verification disabled
            $guzzleClient = new GuzzleClient([
                'verify' => false,  // Disable SSL verification
            ]);

            // Wrap the Guzzle client in Twilio's GuzzleClient
            $twilioHttpClient = new TwilioGuzzleClient($guzzleClient);

            // Pass the TwilioGuzzleClient to the Twilio Client
            $Client = new Client($TwilioSid, $TwilioToken, null, null, $twilioHttpClient);
            
            $otp = rand(100000, 999999);
            $Client->messages->create('+91'.$request->mobile, [
                'from' => $TwilioNumber,
                'body' => 'Your OTP is: ' . $otp
            ]);

            dd("OTP Sent Successfully....");
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}

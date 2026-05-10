<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FreeTrialController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $files = $request->file('image');  // can be a single file or array

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['country'] = $request->country;
        $data['phone'] = $request->phone;
        $data['note'] = $request->note;
        $data['serviceType'] = $request->serviceType;

        Mail::send('email.email', ['data' => $data], function($message) use ($data, $files) {
            $message->from('info@pixfax.com', 'Pixfax')
                ->to('info@pixfax.com')
                ->cc([
                    'ashadbappycse@gmail.com',
                    'pixfax.studio@gmail.com'
                ])->subject($data['Free Trial']);;

            $message->from('info@pixfax.com', 'Pixfax')
                ->replyTo($data["email"], $data["name"])
                ->to('info@pixfax.com')
                ->cc([
                    'ashadbappycse@gmail.com',
                    'pixfax.studio@gmail.com'
                ])
                ->subject($data['email']);

            // Check if the request has uploaded file(s)
            if ($files) {
                // If it's a single file
                if (!is_array($files)) {
                    $files = [$files]; // make it an array
                }

                foreach ($files as $file) {
                    if ($file && $file->isValid()) {
                        $message->attach($file->getRealPath(), [
                            'as' => $file->getClientOriginalName(),
                            'mime' => $file->getMimeType(),
                        ]);
                    }
                }
            }
        });

        return response()->json(['message' => 'success', 'status' => 200]);
    }
}

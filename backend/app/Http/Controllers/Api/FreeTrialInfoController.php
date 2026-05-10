<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FreeTrialInfoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $service_names = $request->serviceName;
        $service_type = $request->serviceType;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['title'] = 'Free Trial';
        $data['phone'] = $request->phone;
        $data['messages'] = $request->message;
        $data['country'] = $request->country;
        $data['service_name'] = implode(", " ,$service_names);
        $data['service_type'] = $request->serviceType;
        $files = $request->file('image');

        if ($service_type == 'Free Trial'){
            Mail::send('email.free', $data, function($message)use($data) {
                $message->to('ashadbappycse@gmail.com','pixfax.studio@gmail.com')
                    ->cc(['info@pixfax.com','pixfax.studio@gmail.com'])
                    ->subject($data["service_type"]);
            });
        } else {
            Mail::send('email.commercial', ['data' => $data], function($message) use ($data, $files) {
                $message->to($data["email"])
                    ->cc([
                        'ashadbappycse@gmail.com',
                        'pixfax.studio@gmail.com'
                    ])
                    ->subject($data["service_type"]);

                if ($files) {
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
        }
        return response()->json(["message" => "success", 'status' => 200]);
    }
}

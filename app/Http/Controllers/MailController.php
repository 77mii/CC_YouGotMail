<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    // public function sendTestEmail()
    // {
    //     $toEmail = 'finger@joe.lafamiglia.my.id';
    //     $subject = 'Test Email from Laravel';
    //     $body = 'This is a test email sent from the Laravel application.';
    //     $headers = 'From:
    // ' . env('MAIL_FROM_ADDRESS') . "\r\n" .
    //                 'Reply-To: ' . env('MAIL_FROM_ADDRESS') . "\r\n" .
    //                 'X-Mailer: PHP/' . phpversion();
    //     if (mail($toEmail, $subject, $body, $headers)) {
    //         return response()->json(['message' => 'Test email sent successfully.']);
    //     } else {
    //         return response()->json(['message' => 'Failed to send test email.'], 500
    //         );
    //     }
    // }
    public function SendEmail(Request $request){
        Mail::to($request->email)->send(new TestMail($request->all()));
    }

    }


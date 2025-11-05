<?php






// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Subscriber;
// use App\Mail\TestMail;
// use Illuminate\Support\Facades\Mail;
// // We no longer need Hash here because the model handles it
// // use Illuminate\Support\Facades\Hash;

// class MailingListController extends Controller
// {
//     /**
//      * Show the subscription form.
//      */
//     public function create()
//     {
//         return view('subscribble');
//     }

//     /**
//      * Store the new subscription.
//      */
//     public function store(Request $request)
//     {
//         // 1. Add validation rules for the new fields
//         $validatedData = $request->validate([
//             'username' => 'required|string|max:255',
//             'email'    => 'required|email|unique:subscribers,email',
//             'birthday' => 'required|date|before:today', // Must be a valid date, cannot be in the future
//             'password' => 'required|string|min:8|confirmed', // 'confirmed' auto-checks 'password_confirmation'
//         ]);

//         // 2. Create the subscriber
//         // The password will be hashed automatically by the Subscriber model
//         $subscriber = Subscriber::create($validatedData);

//         // 3. Prepare data for the email
//         $mailData = [
//             'name'  => $subscriber->username,
//             'email' => $subscriber->email
//         ];

//         // 4. Send the email
//         Mail::to($subscriber->email)->send(new TestMail($mailData));

//         // 5. Redirect back
//         return redirect()->route('subscribe.form')
//                          ->with('success', 'Thank you for subscribing! Please check your email for a confirmation.');
//     }
// }



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailingListController extends Controller
{
    /**
     * Show the subscription form.
     */
    public function create()
    {
        return view('subscribble');
    }

    /**
     * Store the new subscription.
     */
    public function store(Request $request)
    {
        // Validation remains the same
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email'    => 'required|email|unique:subscribers,email',
            'birthday' => 'required|date|before:today',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 1. Create the subscriber
        $subscriber = Subscriber::create($validatedData);

        // 2. Prepare data for the email
        $mailData = [
            'name'     => $subscriber->username,
            'email'    => $subscriber->email,
            // --- ADD THIS LINE ---
            'birthday' => date('F j, Y', strtotime($subscriber->birthday)) // Formats date (e.g., "October 23, 2025")
        ];

        // 3. Send the email
        Mail::to($subscriber->email)->send(new TestMail($mailData));

        // 4. Redirect back
        return redirect()->route('subscribe.form')
                         ->with('success', 'Thank you for subscribing! Please check your email for a confirmation.');
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f9; font-family: Arial, sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0;">

                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #333333; border: 1px solid #444; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">

                    <tr>
                        <td align="center" style="padding: 40px 20px 30px 20px; background-color: #007bff; color: #ffffff; border-radius: 8px 8px 0 0;">
                            <h1 style="margin: 0; font-size: 28px;">Welcome, {{ $data['name'] }}!</h1>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 40px 30px 40px 30px; color: #eeeeee; font-size: 16px; line-height: 1.6;">
                            <p style="margin: 0 0 25px 0; color: #ffffff">Thank you for registering an account. We're excited to have you on board.</p>
                            <p style="margin: 0 0 25px 0; color: #ffffff">Here are the account details you provided:</p>

                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #555555; font-weight: bold;">Username:</td>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #555555; color: #eeeeee;">{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #555555; font-weight: bold;">Email:</td>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #555555; color: #eeeeee;">{{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #555555; font-weight: bold;">Birthday:</td>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #555555; color: #eeeeee;">{{ $data['birthday'] }}</td>
                                </tr>
                            </table>

                            <p style="margin: 30px 0 0 0; color: #ffffff">If you did not create this account, no further action is required.</p>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding: 30px 30px 30px 30px; background-color: #2a2a2a; border-radius: 0 0 8px 8px; color: #999999; font-size: 12px;">
                            <p style="margin: 0;">&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
                </td>
        </tr>
    </table>
</body>
</html>

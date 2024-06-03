{{-- <!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>
    <p>You requested to reset your password. Click the link below to reset it:</p>
    <a href="{{ $resetUrl }}">Reset Password</a>
    <p>If you did not request a password reset, please ignore this email.</p>
    <p>Thanks,<br>{{ config('app.name') }}</p>
</body>
</html> --}}

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Reset Your Password</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        #outlook a { padding: 0; }
        .ReadMsgBody { width: 100%; }
        .ExternalClass { width: 100%; }
        .ExternalClass * { line-height:100%; }
        body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
        p { display: block; margin: 13px 0; }
        @media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
        }
        @media only screen and (min-width:480px) {
            .mj-column-per-100 { width:100%!important; }
        }
    </style>
</head>
<body style="background: #f0f0f0;">
    <div class="mj-container" style="background-color:#f0f0f0;">
        <table role="presentation" cellpadding="0" cellspacing="0" style="background:#f0f0f0;font-size:0px;width:100%;" border="0">
            <tbody>
                <tr>
                    <td>
                        <div style="margin:0px auto;max-width:600px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px 0px 0px 0px;">
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="word-wrap:break-word;font-size:0px;">
                                                                <div style="font-size:1px;line-height:30px;white-space:nowrap;">&#xA0;</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="margin:0px auto;max-width:600px;background:#FFFFFF;">
            <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#FFFFFF;" align="center" border="0">
                <tbody>
                    <tr>
                        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="word-wrap:break-word;font-size:0px;padding:25px 25px 25px 25px;" align="center">
                                                <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:204px;">
                                                                <img alt="" title="" height="auto" src="https://solar.cleanchoiceenergy.com/assets/img/logo-cce.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="204">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="word-wrap:break-word;font-size:0px;padding:0px 15px 0px 15px;" align="center">
                                                <div style="cursor:auto;color:#333333;font-family:Helvetica, sans-serif;font-size:15px;line-height:22px;text-align:center;">
                                                    <h3 style="font-family: Helvetica, sans-serif; font-size: 24px; color: #333333; line-height: 50%;">Reset Your Password</h3>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="word-wrap:break-word;font-size:0px;padding:0px 50px 0px 50px;" align="center">
                                                <div style="cursor:auto;color:#333333;font-family:Helvetica, sans-serif;font-size:15px;line-height:22px;text-align:center;">
                                                    <p>You are receiving this email because we received a password reset request for your account.</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="word-wrap:break-word;font-size:0px;padding:20px 25px 20px 25px;padding-top:10px;padding-left:25px;" align="center">
                                                <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:separate;" align="center" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="border:none;border-radius:5px;color:#FFFFFF;cursor:auto;padding:10px 25px;" align="center" valign="middle" bgcolor="#4DAA50">
                                                                <a href="{{ $resetUrl }}" style="text-decoration: none; background: #4DAA50; color: #FFFFFF; font-family: Helvetica, sans-serif; font-size: 19px; font-weight: normal; line-height: 120%; text-transform: none; margin: 0px;" target="_blank">Reset Your Password</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td style="word-wrap:break-word;font-size:0px;padding:0px 47px 0px 47px;" align="center">
                                                <div style="cursor:auto;color:#333333;font-family:Helvetica, sans-serif;font-size:15px;line-height:22px;text-align:center;">
                                                    <p><span style="font-size:14px;"><strong>Questions?&#xA0;</strong><br>Email us at <a href="mailto:support@cleanchoiceenergy.com?subject=Community%20Solar%20Reset%20Password%20Help" style="color: #555555;">support@cleanchoiceenergy.com</a>.&#xA0;</span></p>
                                                </div>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


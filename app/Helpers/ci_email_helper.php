<?php
if (!function_exists('resetPasswordEmail')) {
    function resetPasswordEmail($detail)
    {
        $data["data"] = $detail;
        $template = '<div style="padding:24px 3.6% 24px;background:#fff;border:1px solid #e3e5e1">
        <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
            <tbody>
                <tr>
                    <td align="center">
                        <div style="width:100%">
                            <b>Hi, ' . $detail["name"] . '</b>! <span class="il">' . $detail["message"] . '</span>
                            <div style="min-height:20px"></div>
                            <div style="width:100%">
                                <a style="display:inline-block;font-size:15px;padding:10px 18px;vertical-align:middle;color:#ffffff;background:#34a8c4;border-top:solid 1px #2c8ea6;border-right:solid 1px #2c8ea6;border-bottom:solid 1px #2c8ea6;border-left:solid 1px #2c8ea6;border-radius:3px;text-decoration:none;white-space:normal;font-weight:bold;line-height:18px" href="' . $detail['reset_link'] . '" target="_blank"> <span class="il"> Reset Password Link </span></a>
                            </div>
                            <div style="min-height:28px"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>';
      
		$emailData['email'] = $detail['user_email'];
        $emailData['subject'] = 'Reset Password';
        $emailData['template'] = $template;
        return sendEmail($emailData);
    }
}
if (!function_exists('sendActivationEmail')) {
    function sendActivationEmail($detail)
    {
        $data["data"] = $detail;
        $template = '<div style="padding:24px 3.6% 24px;background:#fff;border:1px solid #e3e5e1">
        <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
            <tbody>
                <tr>
                    <td align="center">
                        <div style="width:100%">
                            <b>Hi, ' . $detail["name"] . '</b>! <span class="il">' . $detail["message"] . '</span>
                            <div style="min-height:20px"></div>
                            <div style="width:100%">
                            Please click on the below activation link to verify your email address.<br> <a style="display:inline-block;font-size:15px;padding:10px 18px;vertical-align:middle;color:#ffffff;background:#34a8c4;border-top:solid 1px #2c8ea6;border-right:solid 1px #2c8ea6;border-bottom:solid 1px #2c8ea6;border-left:solid 1px #2c8ea6;border-radius:3px;text-decoration:none;white-space:normal;font-weight:bold;line-height:18px" href="' . $detail['activation_link'] . '" target="_blank"> <span class="il">Activation Link </span></a>
                            </div>
                            <div style="min-height:28px"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>';
        $emailData['email'] = $detail['email'];
        $emailData['subject'] = 'Account activation';
        $emailData['template'] = $template;
        return sendEmail($emailData);
    }
}
if (!function_exists('sendEmailVerifiedEmail')) {
    function sendEmailVerifiedEmail($detail)
    {
        $data["data"] = $detail;
        // pre($detail);
        // die;
        $template = '<div style="padding:24px 3.6% 24px;background:#fff;border:1px solid #e3e5e1">
        <table cellpadding="0" cellspacing="0" style="width:100%;margin:0;padding:0">
            <tbody>
                <tr>
                    <td>
                        <div style="width:100%">
                            <b>Dear ' . $detail["name"] . '</b>
                            <div style="min-height:20px"></div>
                            Congratulations ! 
                            <div style="min-height:20px"></div>
                            Your email has been verified 
                            <div style="min-height:20px"></div>
                            <div style="width:100%">
                                <a style="display:inline-block;font-size:15px;padding:10px 18px;vertical-align:middle;color:#ffffff;background:#34a8c4;border-top:solid 1px #2c8ea6;border-right:solid 1px #2c8ea6;border-bottom:solid 1px #2c8ea6;border-left:solid 1px #2c8ea6;border-radius:3px;text-decoration:none;white-space:normal;font-weight:bold;line-height:18px" href="https://www.web.oneserve.in/login" target="_blank"> <span class="il"> Please login </span></a>
                            </div>
                            <div style="min-height:28px"></div>
                            You can use your verified email
                            <br>
                            If you have forgotten password, use the Forgot password link 
                           
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>';

        $emailData['email'] = $detail['email'];
        $emailData['subject'] = 'Account Email Verified';
        $emailData['template'] = $template;
        return sendEmail($emailData);
    }
}
function sendEmail($detail = [])
{
    $send_email = \Config\Services::email();
    $send_email->setTo($detail['email']);
    $send_email->setFrom($send_email->fromEmail, $send_email->fromName);
    $send_email->setSubject($detail['subject']);
    $send_email->setMessage($detail['template']);
    
    if ($send_email->send()) {
    return 1;
    } else {
    return 2;
    }
}
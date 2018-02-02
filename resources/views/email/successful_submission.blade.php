<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style type="text/css" rel="stylesheet" media="all">
        /* Media Queries */
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>

<?php
$style = [
    /* Layout ------------------------------ */
    'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
    'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',
    /* Masthead ----------------------- */
    'email-masthead' => 'padding: 25px 0; text-align: center;',
    'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',
    'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
    'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
    'email-body_cell' => 'padding: 35px;',
    'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
    'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',
    /* Body ------------------------------ */
    'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
    'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',
    /* Type ------------------------------ */
    'anchor' => 'color: #3869D4;',
    'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
    'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
    'paragraph-sub' => 'margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
    'paragraph-center' => 'text-align: center;',
    /* Buttons ------------------------------ */
    'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                 background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                 text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',
    'button--green' => 'background-color: #22BC66;',
    'button--red' => 'background-color: #dc4d2f;',
    'button--blue' => 'background-color: #3869D4;',
];
?>

<?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>

<body style="{{ $style['body'] }}">
<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td style="{{ $style['email-wrapper'] }}" align="center">
            <table width="100%" cellpadding="0" cellspacing="0">
                <!-- Logo -->
                <tr>
                    <td style="{{ $style['email-masthead'] }}">
                        <a style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" href="{{ url('/') }}" target="_blank">
                            <img src="{{ $message->embed('images/logo.png') }}" width="250">
                        </a>
                    </td>
                </tr>

                <!-- Email Body -->
                <tr>
                    <td style="{{ $style['email-body'] }}" width="100%">
                        <table style="{{ $style['email-body_inner'] }}" align="center" width="570" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="{{ $fontFamily }} {{ $style['email-body_cell'] }}">
                                    <!-- Greeting -->
                                    <h1 style="{{ $style['header-1'] }}">
                                        Dear {{ \Illuminate\Support\Facades\Auth::user()->name }},
                                    </h1>

                                    <!-- Intro -->

                                    <p style="{{ $style['paragraph'] }}">
                                        Thank you for registering for the National Design Awards! Your application for registration in the {{$submission->type}} category has been submitted and you are receiving this email as a confirmation.
                                    </p>
                                    <p style="{{ $style['paragraph'] }}">
                                        These are the very first National Design Awards (NDA) being organized and hosted by Lahore University of Management Sciences and Index: The Design Society at LUMS. NDA are the first of its kind which are being held in collaboration with the National Incubation Centre Lahore. It presents you with a unique opportunity to showcase your designing skills and come together to spread national awareness about the importance and impact of good design in all fields.
                                    </p>
                                    <p style="{{$style['paragraph']}}">
                                        Your submission for the NDA will be evaluated by a panel. The jury panel will go through all the entries submitted and shortlisting will take place. The shortlisted teams will be announced on the NDA website. These teams will be given the details of the final phase. The awards ceremony will be held on 1st April at Lahore University of Management Sciences. Further details of the venue will be provided to the shortlisted teams.
                                    </p>
                                    <p style="{{$style['paragraph']}}">
                                        The NDA are held by the larger parent event, UXPakistan. It is a two-day conference being held on 31st March and 1st April 2018. This will be the 2nd edition of this highly anticipated user experience conference which include workshops, sessions by esteemed and competent speakers, start-up demos and more. The conference will focus on promoting the concept of “Design in all Fields”. If you haven’t already registered for the conference we urge you to do so as this conference is one of a kind in Pakistan. For more details visit our website and get yourself registered for the conference <a href="https://www.uxpakistan.com/tickets/" target="_blank">here</a>. Deadline for the early bird registration for UXPakistan is February 25, 2018.
                                    </p>
                                    <p style="{{$style['paragraph']}}">
                                        The submission charges for your category is <?php if($submission->type === 'Professional'):?>2000<?php else:?>1000<?php endif?> PKR. You can either pay INCLUDE PAYMENT METHOD DETAILS.
                                    </p>
                                    <p style="{{$style['paragraph']}}">
                                        We thank you once again for your participation and helping us celebrate good design. Feel free to contact our team on ndapakistan@gmail.com for any help or further information.
                                    </p>

                                    <!-- Salutation -->
                                    <p style="{{ $style['paragraph'] }}">
                                        Best Regards,<br>{{ config('app.name') }}
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td>
                        <table style="{{ $style['email-footer'] }}" align="center" width="570" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}">
                                    <p style="{{ $style['paragraph-sub'] }}">
                                        &copy; {{ date('Y') }}
                                        <a style="{{ $style['anchor'] }}" href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a>.
                                        All rights reserved.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "intern";
$conn = mysqli_connect($host, $user, $password, $db);
$id = $_GET['id'];
$fetchQuery = mysqli_query($conn, "SELECT * FROM internship_2 WHERE id = '$id'");
while ($fetchData = mysqli_fetch_array($fetchQuery)) {
    $body = "<!DOCTYPE html>

<html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>

<head>
    <title></title>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit
        }

        @media (max-width:720px) {
            .icons-inner {
                text-align: center;
            }

            .icons-inner td {
                margin: 0 auto;
            }

            .row-content {
                width: 100% !important;
            }

            .image_block img.big {
                width: auto !important;
            }

            .column .border,
            .mobile_hide {
                display: none;
            }

            table {
                table-layout: fixed !important;
            }

            .stack .column {
                width: 100%;
                display: block;
            }

            .mobile_hide {
                min-height: 0;
                max-height: 0;
                max-width: 0;
                overflow: hidden;
                font-size: 0px;
            }
        }
    </style>
</head>

<body style='background-color: #f9f9f9; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
    <table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation'
        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9;' width='100%'>
        <tbody>
            <tr>
                <td>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:10px;line-height:10px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='Alternate text'
                                                                        src='https://digitalmelodic.com/images/Your_Logo.png'
                                                                        style='display: block; height: auto; border: 0; width: 154px; max-width: 100%;'
                                                                        title='Alternate text' width='154' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:15px;line-height:15px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-4'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='Alternate text' class='big'
                                                                        src='https://digitalmelodic.com/images/Up_pink.png'
                                                                        style='display: block; height: auto; border: 0; width: 700px; max-width: 100%;'
                                                                        title='Alternate text' width='700' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-5'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffd3e0; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='width:100%;padding-right:0px;padding-left:0px;padding-top:30px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='I'm an image'
                                                                        src='https://digitalmelodic.com/images/Welcome_Email.png'
                                                                        style='display: block; height: auto; border: 0; width: 420px; max-width: 100%;'
                                                                        title='I'm an image' width='420' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 18px; color: #191919; line-height: 1.5; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 16px; text-align: center;'>
                                                                            <strong><span style='font-size:38px;'>Hi "
        . $fetchData['name'] . ", </span></strong>
                                                                        </p>
                                                                        <p
                                                                            style='margin: 0; font-size: 16px; text-align: center;'>
                                                                            <strong><span
                                                                                    style='font-size:38px;'>welcome to
                                                                                    Digital Melodic!</span></strong>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:65px;padding-left:10px;padding-right:10px;padding-top:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #191919; line-height: 1.2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: center;'>
                                                                            <span style='font-size:22px;'>You are
                                                                                selected for our new internship
                                                                                batch!</span>
                                                                        </p>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: center;'>
                                                                            <span style='font-size:22px;'>Which is going
                                                                                to started from <b>June'2022</b></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-6'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-left:20px;padding-right:20px;padding-top:35px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 18px; color: #191919; line-height: 1.5; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 42px;'>
                                                                            <span style='font-size:28px;'><strong><span
                                                                                        style=''>Let's Get
                                                                                        Started</span></strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='5' cellspacing='0'
                                                        class='divider_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td>
                                                                <div align='center'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        role='presentation'
                                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                                        width='15%'>
                                                                        <tr>
                                                                            <td class='divider_inner'
                                                                                style='font-size: 1px; line-height: 1px; border-top: 2px solid #FFD3E0;'>
                                                                                <span> </span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='divider_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td>
                                                                <div align='center'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        role='presentation'
                                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                                        width='5%'>
                                                                        <tr>
                                                                            <td class='divider_inner'
                                                                                style='font-size: 1px; line-height: 1px; border-top: 2px solid #FFD3E0;'>
                                                                                <span> </span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-7'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='66.66666666666667%'>
                                                    <div class='spacer_block'
                                                        style='height:5px;line-height:5px;font-size:1px;'> </div>
                                                    <div class='spacer_block mobile_hide'
                                                        style='height:20px;line-height:20px;font-size:1px;'> </div>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #34495e; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 40px;'>
                                                                            <span style='font-size:20px;'><strong><span
                                                                                        style=''>Get Your Task </span></strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:30px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left;'>
                                                                            Get your task along with your group. Learn from your mentor properly what you have to do.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:15px;padding-left:45px;padding-right:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #a96b7d; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 28px;'>
                                                                            <span style='font-size:14px;'><strong><span
                                                                                        style=''><span style=''><span
                                                                                                style=''>New ideas!
                                                                                                </span></span>
                                                                                    </span>
                                                                                </strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class='column column-2'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='33.333333333333336%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-right:40px;width:100%;padding-left:0px;padding-top:5px;padding-bottom:5px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='I'm an image'
                                                                        src='https://digitalmelodic.com/images/Step_1_1.png'
                                                                        style='display: block; height: auto; border: 0; width: 193px; max-width: 100%;'
                                                                        title='I'm an image' width='193' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-8'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:35px;line-height:35px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-9'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='33.333333333333336%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-left:40px;width:100%;padding-right:0px;padding-top:5px;padding-bottom:5px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='I'm an image'
                                                                        src='https://digitalmelodic.com/images/Step_2_2.png'
                                                                        style='display: block; height: auto; border: 0; width: 193px; max-width: 100%;'
                                                                        title='I'm an image' width='193' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class='column column-2'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='66.66666666666667%'>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:10px;padding-top:5px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #34495e; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 40px;'>
                                                                            <span style='font-size:20px;'><strong><span
                                                                                        style=''>Complete Your Task.</span></strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:30px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left;'>
                                                                            Complete your task with your team members, help others to complete their tasks.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:15px;padding-left:40px;padding-right:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #a96b7d; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 28px;'>
                                                                            <span style='font-size:14px;'><strong><span
                                                                                        style=''><span style=''><span
                                                                                                style=''>Send your data
                                                                                                </span></span>
                                                                                    </span>
                                                                                </strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-10'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:35px;line-height:35px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-11'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='66.66666666666667%'>
                                                    <div class='spacer_block'
                                                        style='height:5px;line-height:5px;font-size:1px;'> </div>
                                                    <div class='spacer_block mobile_hide'
                                                        style='height:20px;line-height:20px;font-size:1px;'> </div>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #34495e; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 40px;'>
                                                                            <span style='font-size:20px;'><strong><span
                                                                                        style=''>Submit Your Task</span></strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:30px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left;'>
                                                                            Send your task to your team leader or mentor before time. Wait for next task, between this take left spent some time with your loved one.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:20px;padding-left:40px;padding-right:10px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #a96b7d; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 28px;'>
                                                                            <span style='font-size:14px;'><strong><span
                                                                                        style=''><span style=''><span
                                                                                                style=''>Start
                                                                                                collaborating 
                                                                                                </span></span>
                                                                                    </span>
                                                                                </strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class='column column-2'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='33.333333333333336%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:15px;padding-right:35px;width:100%;padding-left:0px;padding-top:5px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='I'm an image'
                                                                        src='https://digitalmelodic.com/images/Step_3_1.png'
                                                                        style='display: block; height: auto; border: 0; width: 198px; max-width: 100%;'
                                                                        title='I'm an image' width='198' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-12'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:20px;line-height:20px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-13'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='Alternate text' class='big'
                                                                        src='https://digitalmelodic.com/images/white_down.png'
                                                                        style='display: block; height: auto; border: 0; width: 700px; max-width: 100%;'
                                                                        title='Alternate text' width='700' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-14'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:20px;line-height:20px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-15'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='Alternate text' class='big'
                                                                        src='https://digitalmelodic.com/images/Up_pink.png'
                                                                        style='display: block; height: auto; border: 0; width: 700px; max-width: 100%;'
                                                                        title='Alternate text' width='700' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-16'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffd3e0; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='50%'>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:25px;padding-left:40px;padding-right:40px;padding-top:50px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 18px; color: #191919; line-height: 1.5; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 10px; text-align: center; mso-line-height-alt: 45px;'>
                                                                            <span style='font-size:30px;'><strong><span
                                                                                        style=''>Join our Official
                                                                                    </span></strong>
                                                                            </span>
                                                                        </p>
                                                                        <p
                                                                            style='margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 45px;'>
                                                                            <span style='font-size:30px;'><strong><span
                                                                                        style=''>WhatsApp
                                                                                        Group</span></strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:15px;width:100%;padding-right:0px;padding-left:0px;'>
                                                                <a href='https://chat.whatsapp.com/HXaqIOu8tI3DdTAL9ayEvK'>
                                                                    <div align='center' style='line-height:10px'><img
                                                                            alt='Click to Join Group'
                                                                            src='https://digitalmelodic.com/images/WhatsApp.png'
                                                                            style='display: block; height: auto; border: 0; width: 175px; max-width: 100%;'
                                                                            title='Alternate text' width='175' /></div>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class='column column-2'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='50%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='width:100%;padding-right:0px;padding-left:0px;padding-top:20px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='Alternate text'
                                                                        src='https://digitalmelodic.com/images/app_image_2.png'
                                                                        style='display: block; height: auto; border: 0; width: 298px; max-width: 100%;'
                                                                        title='Alternate text' width='298' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-17'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='social_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:50px;text-align:center;'>
                                                                <table align='center' border='0' cellpadding='0'
                                                                    cellspacing='0' class='social-table'
                                                                    role='presentation'
                                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                                    width='230px'>
                                                                    <tr>
                                                                        <td style='padding:0 7px 0 7px;'>
                                                                            <a href='https://www.facebook.com/DigitalMelodic'
                                                                                target='_blank'><img alt='Facebook'
                                                                                    height='32'
                                                                                    src='https://digitalmelodic.com/images/facebook2x.png'
                                                                                    style='display: block; height: auto; border: 0;'
                                                                                    title='Facebook' width='32' /></a>
                                                                        </td>
                                                                        <td style='padding:0 7px 0 7px;'>
                                                                            <a href='https://twitter.com/DigitalMelodic'
                                                                                target='_blank'><img alt='Twitter'
                                                                                    height='32'
                                                                                    src='https://digitalmelodic.com/images/twitter2x.png'
                                                                                    style='display: block; height: auto; border: 0;'
                                                                                    title='Twitter' width='32' /></a>
                                                                        </td>
                                                                        <td style='padding:0 7px 0 7px;'>
                                                                            <a href='https://instagram.com/DigitalMelodic'
                                                                                target='_blank'><img alt='Instagram'
                                                                                    height='32'
                                                                                    src='https://digitalmelodic.com/images/instagram2x.png'
                                                                                    style='display: block; height: auto; border: 0;'
                                                                                    title='Instagram' width='32' /></a>
                                                                        </td>
                                                                        <td style='padding:0 7px 0 7px;'>
                                                                            <a href='https://www.linkedin.com/in/ DigitalMelodic'
                                                                                target='_blank'><img alt='LinkedIn'
                                                                                    height='32'
                                                                                    src='https://digitalmelodic.com/images/linkedin2x.png'
                                                                                    style='display: block; height: auto; border: 0;'
                                                                                    title='LinkedIn' width='32' /></a>
                                                                        </td>
                                                                        <td style='padding:0 7px 0 7px;'>
                                                                            <a href='https://www.youtube.com/c/DigitalMelodic'
                                                                                target='_blank'><img alt='YouTube'
                                                                                    height='32'
                                                                                    src='https://digitalmelodic.com/images/youtube2x.png'
                                                                                    style='display: block; height: auto; border: 0;'
                                                                                    title='YouTube' width='32' /></a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:25px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: center;'>
                                                                            If you have any questions, feel free message
                                                                            us at
                                                                            <a href='mailto:career@digitalmelodic.com'
                                                                                style='text-decoration: none; color: #c14c73;'><b>career@digitalmelodic.com</b></a>
                                                                            or
                                                                            <a href='https://wa.me/919679041122?text=Hello! I need some information.'
                                                                                rel='noopener'
                                                                                style='text-decoration: none; color: #c14c73;'
                                                                                target='_blank'><b>WhatsApp</b></a>. We
                                                                            pray for
                                                                            your better and bright future.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='text_block'
                                                        role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td
                                                                style='padding-bottom:10px;padding-left:40px;padding-right:40px;'>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: center;'>
                                                                            Gazi Para Lane, Dhaltitha, Basirhat, WB,
                                                                            India, 743412
                                                                        </p><br><br>
                                                                        <p
                                                                            style='margin: 0; font-size: 14px; text-align: center; color: #c14c73;'>
                                                                            <b>2022 &copy; Digital Melodic - All rights
                                                                                reserved</b>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-18'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='10' cellspacing='0'
                                                        class='text_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'
                                                        width='100%'>
                                                        <tr>
                                                            <td>
                                                                <div style='font-family: sans-serif'>
                                                                    <div class='txtTinyMce-wrapper'
                                                                        style='font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #ffffff; line-height: 1.2;'>
                                                                        <p
                                                                            style='margin: 0; font-size: 12px; text-align: center;'>
                                                                            <span style='color:#555555;'>Terms & Conditions
                                                                                <strong>|</strong> Privacy Policy</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-19'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='image_block' role='presentation'
                                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'
                                                        width='100%'>
                                                        <tr>
                                                            <td style='width:100%;padding-right:0px;padding-left:0px;'>
                                                                <div align='center' style='line-height:10px'><img
                                                                        alt='Alternate text' class='big'
                                                                        src='https://digitalmelodic.com/images/white_down.png'
                                                                        style='display: block; height: auto; border: 0; width: 700px; max-width: 100%;'
                                                                        title='Alternate text' width='700' /></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-20'
                        role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                        <tbody>
                            <tr>
                                <td>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0'
                                        class='row-content stack' role='presentation'
                                        style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;'
                                        width='700'>
                                        <tbody>
                                            <tr>
                                                <td class='column column-1'
                                                    style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'
                                                    width='100%'>
                                                    <div class='spacer_block'
                                                        style='height:25px;line-height:25px;font-size:1px;'> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- End -->
</body>

</html>";
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    if ($_GET['id'] != null) {



        require('fpdf-lib/fpdf.php');
        class PDF extends FPDF
        {
            // Page header
            function Header()
            {
                // Logo
                $this->Image('./img/bg.jpg', 0, 0, 200);
                // Arial bold 15
                $this->SetFont('Arial', '', 16);
                // Move to the right
                $this->Cell(80);

                // Line break
                $this->Ln(30);
            }

            // Page footer
            function Footer()
            {
                // Position at 1.5 cm from bottom
                $this->SetY(-30);
                // Arial italic 8
                $this->SetFont('Arial', '', 8);
                // Page number
                $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
            }
        }
        $id = $_GET['id'];
        $fetchQuery = mysqli_query($conn, "SELECT * FROM internship_2 WHERE id = '$id'");
        while ($fetchData = mysqli_fetch_array($fetchQuery)) {
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(185, 8, 'INTERNSHIP CONTRACT AGREEMENT', 0, 1, 'C');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'PARTIES', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'This Internship Agreement is entered into on 01-June-2022, by and between Digital Melodic, with an address of Gazi Para Lane Dhaltitha, Basirhat, West Bengal 743412, and ' . $fetchData['name'] . ', with an address of ' . $fetchData['address'] . '.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'INTERNSHIP POSITION', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Intern has been assigned to the position of UI/UX Designer.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'DUTIES AND RESPONSIBILITIES', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'During the internship period, the Intern shall have the responsibility of performing any task given by his/her supervisor. ', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'Intern cannot share any data of company with any other person or company. Even he/she is barred from store any sensitive data like code that he/she or other team members writing.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'PAY AND COMPENSATION', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Parties hereby agree that this internship is unpaid and that the Intern will not be compensated or paid for any services that he/she conducts at the Company.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Intern agrees that he/she will be compensated in knowledge, education and experience as consideration for the duties and responsibilities that he/she will undertake under this Agreement.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'WORKING HOURS', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Intern agrees that he/she will be a minimum working of 4 hours per day (Monday to Sunday), and work will do from home they do not need to come office.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'TERM OF AGREEMENT', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'This Agreement shall be effective on the date of signing this Agreement (the "Effective Date") and will end on 31st August 2022.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The internship is related to an educational purpose and there is no guarantee or expectation that the activity will result in employment with the Company.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Intern does not replace or displace any employee of the Company.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Intern will receive direct and close supervision by an appropriate supervisor.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'Intern is not entitled to wages or any compensation or benefits for the time spent in the internship.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Company does not derive an immediate advantage from the activities performed by the Intern.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'Intern assumes all the risks of participating in the internship program. In consideration of the opportunity afforded to the Intern to participate in the internship program, Intern hereby agrees that he/she, his/her assignees, heirs, guardians, and legal representatives, will not make a claim against Company or any of its affiliated organizations, or either of their officers or directors collectively or individually, or any of its employees, for the injury of death to Intern or damage to his/her property, however caused, arising from his/her participation in the internship program. Without limiting the generality of the foregoing. Intern hereby waives and releases any rights, actions, or causes or action resulting from personal injury or death to him/her, or damage to his/her property, sustained in connection with his/her participation in the internship program.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'TERMINATION', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'This Agreement may be terminated if any of the following occurs:', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, '1.	Immediately if the Intern breaches this Agreement.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, '2.	At any given time by providing written notice to the other party 30 days prior to terminating the Agreement.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, '3.	Company may at any time in its sole discretion, terminate the internship without notice or cause.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'Upon terminating this Agreement, the Intern will be required to return all the Companys materials, products or any other content at his/her earliest convenience, within 3 days of termination. ', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'CONFIDENTIALITY', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'All terms and conditions of this Agreement and any materials provided during the term of the Agreement must be kept confidential by the Intern, unless the disclosure is required pursuant to process of law.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Company.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'INTELLECTUAL PROPERTY', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Intern agrees that any intellectual property provided to him/her by the Company will remain the sole property of the Company, including, but not limited to, copyrights, patents, trade secret rights, and other intellectual property rights associated with any ideas, concepts, techniques, inventions, processes, works of authorship, confidential information or trade secrets.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'REPRESENTATION AND WARRANTIES', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'Both Parties warrant that, by entering into this Agreement, they do not violate or infringe upon the rights of any third party or violate any other agreement between the Parties, individually, and any other person, organization, or business or any law or governmental regulation.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');
            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'LIMITATION OF LIABILITY', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'In no event shall the Company or the Intern be individually liable for any damages for breach of duty by third parties, unless the Companys or Interns act or failure to act involves intentional misconduct, fraud, or a knowing violation of the law.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'SEVERABILITY', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'In the event that any provision of this Agreement is found to be void and unenforceable by a court of competent jurisdiction, then the remaining provisions will remain in force in accordance with the Parties intention.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'ENTIRE AGREEMENT', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'This Agreement contains the entire agreement and understanding among the Parties to it with respect to its subject matter, and supersedes all prior agreements, understandings, inducements and conditions, express or implied, oral or written, of any nature whatsoever with respect to its subject matter. The express terms of the Agreement control and supersede any course of performance and/or usage of the trade inconsistent with any of its terms.', 0, 'L');

            $pdf->Cell(185, 4, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'BU', 12);
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(55, 8, 'SIGNATURE', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 0, 'L');
            $pdf->Cell(115, 8, '', 0, 0, 'L');
            $pdf->Cell(5, 8, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(10, 8, '', 0, 0, 'L');
            $pdf->MultiCell(175, 8, 'The Parties hereby agree to the terms and conditions set forth in this Agreement and such is demonstrated by their signatures below:', 0, 'L');

            $pdf->Cell(185, 6, '', 0, 1, 'L');

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(13, 8, '', 0, 0, 'L');
            $pdf->Cell(85, 8, '', 0, 1, 'L');
            $pdf->Cell(13, 8, '', 0, 0, 'L');
            $pdf->Image('./img/ss.png', 30, 207, 30);
            $pdf->Cell(185, 6, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(13, 5, '', 0, 0, 'L');
            $pdf->Cell(85, 5, 'Sushanta Karmakar', 0, 1, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->Cell(13, 4, '', 0, 0, 'L');
            $pdf->Cell(85, 4, 'CEO of Digital Melodic', 0, 1, 'L');

            $pdf->Cell(185, 6, '', 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(5, 5, '', 0, 0, 'L');
            $pdf->Cell(85, 6, 'I ' . $fetchData['name'] . ', hereby declare that I read the agreement thoroughly and give my consent.', 0, 1, 'L');

            $pdf->Cell(185, 6, '', 0, 1, 'L');

            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(13, 5, '', 0, 0, 'L');
            $pdf->Cell(85, 5, 'Intern Name: ' . $fetchData['name'], 0, 1, 'L');
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(185, 6, '', 0, 1, 'L');
            $pdf->Cell(13, 8, '', 0, 0, 'L');
            $pdf->Cell(85, 8, 'Signature:_______________________', 0, 1, 'L');

            $pdf->Output("certificate/" . $fetchData['name'] . '.pdf', 'F');



            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'career@digitalmelodic.com';                     //SMTP username
            $mail->Password   = 'DigitalMeldic@Career$47';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $email = $fetchData['email'];
            $name1 = $fetchData['name'];
            //Recipients
            $mail->setFrom('career@digitalmelodic.com', 'Career');
            $mail->addAddress($email, $name1);             //Name is optional
            $mail->addReplyTo('career@digitalmelodic.com', 'Career');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            $pdf_file = $fetchData['name'] . '.pdf';
            $mail->addAttachment('certificate/' . $pdf_file);         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hello! ' . $fetchData['name'] . ', Your Intership Letter';
            $mail->Body    = $body;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        }
    } else {
        echo "Error";
        // header('location:mail.php');
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="margin:0;padding:40px;background:#f5f5f5;font-family:Arial,Helvetica,sans-serif;">
    <table align="center" width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #e5e5e5;border-radius:8px;">
        <tr>
            <td>
                <img src="{{ $message->embed(public_path('images/email-header.png')) }}" alt="{{ config('app.name') }}" style="width:100%">
            </td>
        </tr>
        <tr>
            <td style="padding:30px;">
               <p style="color:#555;line-height:1.6;">
                   Получихме запитване през velinagrebenska.com със следните детайли: 

                </p>
               <p style="color:#555;line-height:1.6;">
                   <span style="font-weight: bold">Име: </span>{{ $data['name'] }}
                </p>

                <p style="color:#555;line-height:1.6;">
                   <span style="font-weight: bold">Имейл: </span>{{ $data['email'] }}

                </p>
                <p style="color:#555;line-height:1.6;">
                   <span style="font-weight: bold">Съобщение: </span>{{ $data['message'] }}

                </p>
               

                <hr style="margin:30px 0;border:none;border-top:1px solid #eeeeee;">

                <p style="font-size:12px;color:#888;">
                    © {{ date('Y') }} {{ config('app.name') }}
                </p>

            </td>
        </tr>
    </table>

</body>
</html>
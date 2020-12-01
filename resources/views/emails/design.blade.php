@extends('layouts.mail.default')
@section('content')
    <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0;padding-bottom:15px">
            <h2 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#333333">
                <font style="vertical-align:inherit">
                    <font style="vertical-align:inherit">
                        <font style="vertical-align:inherit">
                            <font style="vertical-align:inherit">
                                New quote .com
                            </font>
                        </font>
                    </font>
                </font>
            </h2>
        </td>
    </tr>

    <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px">
            <span style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777">
                <font style="vertical-align:inherit">
                    <font style="vertical-align:inherit">
                        <font style="vertical-align:inherit">
                            <font style="vertical-align:inherit">
                                <p><strong>Package:</strong> {{$design->title}}</p>
                                <p><strong>Name:</strong> {{$design->name}}</p>
                                <p><strong>Email:</strong> {{$design->email}}</p>
                                <p><strong>Destinations:</strong> {{$design->destinations}}</p>
                                <p><strong>Category:</strong> {{$design->category}}</p>
                                <p><strong>Travellers:</strong> {{$design->travellers}}</p>
                                <p><strong>Phone:</strong> {{$design->telefono}}</p>
                                <p><strong>Duration:</strong> {{$design->duration}}</p>
                                <p><strong>Travel date:</strong> {{$design->date}}</p>
                                <p><strong>Planning:</strong> {{$design->plan}}</p>
                                <p><strong>Comment:</strong> {{$design->comment}}</p>
                            </font>
                        </font>
                    </font>
                </font>
            </span>
        </td>
    </tr>
@endsection

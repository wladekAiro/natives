@extends('layout.nightlayout')
@section('content')
    <style type="text/css">
        .containerd {
            width: 700px;
            max-width: 800px;
            margin: 0 auto;
            margin-top: 4%;
            background: url(/images/natives_logo2.png) no-repeat cover;
            background-color: transparent;
            font-family: "Helvetica Neue", Helvetica, Arial;
        }

        #signup {
            padding: 0px 25px 25px;
            background: transparent;
            box-shadow:
            0px 0px 0px 5px rgba( 255,255,255,0.4 ),
            0px 4px 20px rgba( 0,0,0,0.33 );
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            display: table;
            position: static;
        }

        #signup .header {
            margin-bottom: 20px;
        }

        #signup .header h3 {
            color: limegreen;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
            padding-left: 40%;
        }

        #signup .header p {
            color: #8f8f8f;
            font-size: 14px;
            font-weight: 300;
            padding-left: 36%;
        }

        #signup .sep {
            height: 1px;
            background: transparent;
            width: 700px;
            margin: 0px -25px;
        }

        #signup .inputs {
            margin-top: 25px;
        }

        #signup .inputs label {
            color: #8f8f8f;
            font-size: 12px;
            font-weight: 300;
            letter-spacing: 1px;
            margin-bottom: 7px;
            display: block;
        }

        input::-webkit-input-placeholder {
            color:    #b5b5b5;
        }

        input:-moz-placeholder {
            color:    #b5b5b5;
        }

        #signup .inputs input[type=email], input[type=text] , textarea {
            background: #f5f5f5;
            font-size: 1.2rem;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: none;
            padding: 13px 10px;
            width: 650px;
            margin-bottom: 20px;
            box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
            clear: both;
        }

        #signup .inputs input[type=email]:focus, input[type=text]:focus {
            background: #fff;
            box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
            outline: none;
        }

        #signup .inputs .checkboxy {
            display: block;
            position: static;
            height: 25px;
            margin-top: 10px;
            clear: both;
        }

        #signup .inputs input[type=checkbox] {
            float: left;
            margin-right: 10px;
            margin-top: 3px;
        }

        #signup .inputs label.terms {
            float: left;
            font-size: 14px;
            font-style: italic;
        }

        #signup .inputs #submit {
            width: 100%;
            margin-top: 20px;
            padding: 15px 0;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            text-align: center;
            text-decoration: none;
            background: -moz-linear-gradient(
                    top,
                    #0f0f0f 0%,
                    #cd5c0a);
            background: -webkit-gradient(
                    linear, left top, left bottom,
                    from(#b9c5dd),
                    to(#a4b0cb));
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            border: 1px solid #737b8d;
            -moz-box-shadow:
            0px 5px 5px rgba(000,000,000,0.1),
            inset 0px 1px 0px rgba(255,255,255,0.5);
            -webkit-box-shadow:
            0px 5px 5px rgba(000,000,000,0.1),
            inset 0px 1px 0px rgba(255,255,255,0.5);
            box-shadow:
            0px 5px 5px rgba(000,000,000,0.1),
            inset 0px 1px 0px rgba(255,255,255,0.5);
            text-shadow:
            0px 1px 3px rgba(000,000,000,0.3),
            0px 0px 0px rgba(255,255,255,0);
            display: table;
            position: static;
            clear: both;
        }

        #signup .inputs #submit:hover {
            background: -moz-linear-gradient(
                    top,
                    #a4b0cb 0%,
                    #b9c5dd);
            background: -webkit-gradient(
                    linear, left top, left bottom,
                    from(#a4b0cb),
                    to(#b9c5dd));
        }
    </style>
    <div class="containerd">
        <form id="signup">

            <div class="header">

                <h3>Contact us</h3>

                <p>You want to fill out this form</p>

            </div>

            <div class="sep"></div>

            <div class="inputs">

                <input type="email" placeholder="e-mail" autofocus />

                <input type="text" placeholder="Subject" />

                <textarea placeholder="Email content"></textarea>

                <a id="submit" href="#">Send</a>

            </div>

        </form>

    </div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    {!! meta_init() !!}
    <meta name="keywords" content="@get('keywords')">
    <meta name="description" content="@get('description')">
    <meta name="author" content="@get('author')">

    <title>@get('title')</title>

    @styles()

    <style>
        html {
            background: #1d1f20;
            margin: 0 4rem;
        }

        .header {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 4rem;
            font-weight: 100;
            letter-spacing: 2px;
            text-align: center;
            color: #f35626;
            background-image: -webkit-linear-gradient(92deg, #f35626, #feab3a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-animation: hue 10s infinite linear;
        }

        p{
            text-align: center;
            color: whitesmoke;
        }

        @-webkit-keyframes hue {
            from {
                -webkit-filter: hue-rotate(0deg);
            }
            to {
                -webkit-filter: hue-rotate(-360deg);
            }
        }

    </style>

</head>

<body>
{{--@partial('header')--}}

@content()

{{--@partial('footer')--}}

@scripts()
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <link rel="stylesheet" href="./scedule_practice01.css">
    </head>

    <body>
        <div class="example3">
            <h1 class="example2">パスワード</h1>
            <div class="example1">
                <div>
                    <button>ログイン</button>
                    <a href="{{ url('/')}}">
                        <button>戻る</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
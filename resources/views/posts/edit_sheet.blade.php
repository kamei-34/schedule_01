<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>edit_sheet</title>
        <link rel="stylesheet" href="./scedule_practice01.css">
    </head>

    <body>
        <div class="example3">
            <h1 class="example2">ページタイトル</h1>
            <div class="example1">
                <div>
                    <button>変更</button>
                    <a href="{{ url('/schedule')}}">
                        <button>削除</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
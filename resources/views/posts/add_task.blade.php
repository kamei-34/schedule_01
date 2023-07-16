<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>add_task</title>
        <link rel="stylesheet" href="./scedule_practice01.css">
    </head>

    <body>
        <div class="example3">
            <h1 class="example2">＜期間＞</h1>
            <h1 class="example2">＜内容＞</h1>
            <h1 class="example2">＜色＞</h1>
            <div class="example1">
                <div>
                    <button>保存</button>
                    <a href="{{ url('/schedule')}}">
                        <button>削除</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
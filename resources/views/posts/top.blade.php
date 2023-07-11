<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Top</title>
        <link rel="stylesheet" href="./schedule_01.css">
    </head>

    <body>
        <div class="example2">
            <h1>既存のスケジュールリスト</h1>
            <div classs='post'>
                <h3>題目1:</h3>
                <h3>題目2:</h3>
            </div>
            <div>
                <a href="{{ url('/create_schedule')}}">
                    <button>スケジュールの新規作成</button>
                </a>
            </div>
        </div>
    </body>
</html>
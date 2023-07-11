<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
        <link rel="stylesheet" href="./scedule_practice04.css">
    </head>

    <body>
        <div style="display: flex; align-items: center;">
            <h1 style="flex: 1;">題目:</h1>
            <button align="right">タスクの追加</button>
        </div>
        <div style="display: flex; align-items: center;">
            <h3 style="flex: 1;">シート名:</h3>
            <button align="right">シート名の変更</button>
        </div>
        <div id="currentMonth"></div>
        <div id="calendar1"></div>
        <div id="calendar2"></div>
        <div id="calendar3"></div>
        <div id="calendar4"></div>
        <div id="calendar5"></div>
        <div id="calendar6"></div>

        <script src="./scedule_practice04.js">
        </script>
    </body>
</html>

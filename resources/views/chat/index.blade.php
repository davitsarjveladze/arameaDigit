<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Web Socket Demo</title>
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>
<ul id="chat"></ul>
დასდასდასდასდ
<form>
    <textarea rows="8" cols="80" id="message"></textarea>
    <br />
    <button type="button" onclick="">Send</button>
</form>
<script src="https://cdn.socket.io/4.0.0/socket.io.min.js" integrity="sha384-DkkWv9oJFWLIydBXXjkBWnG1/fuVhw8YPBq37uvvD6WSYRFRqr21eY5Dg9ZhmWdy" crossorigin="anonymous"></script>
<script>
    const WebSocket = import('{{asset('ws/index.js')}}');
    console.log(WebSocket)
    const ws = new WebSocket('wss://echo.websocket.org/', {
        origin: 'https://websocket.org'
    });
    ws.on('open', function open() {
        console.log('connected');
        ws.send(Date.now());
    });

    ws.on('close', function close() {
        console.log('disconnected');
    });

    ws.on('message', function incoming(data) {
        console.log(`Roundtrip time: ${Date.now() - data} ms`);

        setTimeout(function timeout() {
            ws.send(Date.now());
        }, 500);
    });
</script>
{{--    <script src="{{ asset('/js/app.js') }}"></script>--}}
{{--<script>--}}
{{--    console.log(Echo);--}}
{{--    Echo.channel('user-channel')--}}
{{--        .listen('SendMessage', e => {--}}
{{--            console.log(e)--}}
{{--        })--}}
{{--</script>--}}
</body>
</html>
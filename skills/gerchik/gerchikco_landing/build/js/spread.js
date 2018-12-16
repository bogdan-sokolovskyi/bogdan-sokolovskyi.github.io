(function() {
    'use strict';
    $(document).ready(($) => {
        let URL_SERVER = 'https://websocket.gerchikco.com:10001/?spreadsRN=line,table';
        let socket = io.connect(URL_SERVER);

        socket.on('message', (data) => {
            data = JSON.parse(data);
            let html = '';
            if (data.length) {
                $.each(data, function (index, value) {
                    if (value.progress == 'down')
                        html += '<tr><td>' + value.pair + '</td><td><span class="table__red">' + value.bid + '</span></td><td><span class="table__red">' + value.asc + '</span></td><td>' + (value.sprad / 10) + '</td></tr>'
                    else
                        html += '<tr><td>' + value.pair + '</td><td><span class="table__green">' + value.bid + '</span></td><td><span class="table__green">' + value.asc + '</span></td><td>' + (value.sprad / 10) + '</td></tr>'

                });
                $("div.table-show-content table").html(html);
            }
        });
    });
}());
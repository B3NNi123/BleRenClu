var ws_host = "nuntius.minted.de";
var ws_port = "9000";
var ws_server = "/blendclust/sock/server.php";
var ws_url = "ws://" + ws_host + ":" + ws_port + "/" + ws_server;

try
    {
        socket = new WebSocket(ws_url);

        // Define a handlerfunction (Can't handle my swag ;) ) 
        socket.onopen = function()
            {
                alert("Successfully connected");

                // Welcomemessage to server
                socket.send("Hello World!");
            };

        socket.onmessage = function(msg)
            {
                alert("New Message: " + msg.data);
            };

        socket.onclose = function(msg)
            {
                alert("Connection closed.");
            };
    }
catch(ex)
    {
        alert("Exception: " + ex);
    }

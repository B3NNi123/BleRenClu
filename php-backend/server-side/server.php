<?php
session_start();

/*
DEV-NOTE:
Should the script be monetized?
Marked every monetization function with a (monetized)
*/



//defining connection variables
$host = 'nuntius.minted.de';
$port = '9000';

//pulling User Strings from session
    $usr = $_SESSION['username'];
    $plduid = $_SESSION['uuid']; //ID for identifying our user
    $accStat = $_SESSION['accstatus']; //Account status for eventually higher rights. (monetized)
    $accCredits = $_SESSION['credits']; //Credit-Balance on the account (monetized)
    //$accPrivs = $_SESSION['privs'];


/*
We now create a socket conform to W3C. 
It represents the frontend corrosponding with a C++ backend by Bobby Meier.
Task of the Webserver is to handle uploaded .blend packets and push then to a designated location. 
ALso it's task is to supervise the backend with rendering and give report to the admin and the user.
*/

class Sock{
    $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    socket_bind($sock, $host, $port);
    socket_listen($sock);
    $sockets = array($sock);
    $arClients = array();
}

new Sock;
while true{
    echo "Waiting for a spunky connection....rn";
    
    $sockets_change = $sockets;
    $ready = socket_select($sockets_change, $write = null, $expect = null, null);
    
    echo "Connection accepted.rn";
    foreach($sockets_change as $s)
        {
            if ($s == $sock)
                {
                    //changes made to the serversocket.
                    $client = socket_accept($sock);
                    array_push($sockets, $client);
                    print_r($sockets);
                }else{
                    //e.g. incoming messages from client-sockets
                    $bytes = @socket_recv($s, $buffer, 2048, 0);
    }
        }
            }   

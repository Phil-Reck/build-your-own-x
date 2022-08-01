<?php

namespace ClanCats\Station\PHPServer;

class Server {
    protected $host = null;
    protected $port = null;
    protected $socket = null;

    // Bind the socket AF_INET(ipv4) socket address SOCK_STREAM to full duplex socket address
    protected function createSocket() 
    {
        $this->socket = socket_create(AF_INET, SOCK_STREAM, 0);
    }


    protected function bind()  
    {
        if ( !socket_bind( $this->socket, $this->host, $this->port ) )
        {
            throw new Exception( 'Could not bind: '.$this->host.':'.$this->port.' - '.socket_strerror( socket_last_error() ) );
        }
    }

}
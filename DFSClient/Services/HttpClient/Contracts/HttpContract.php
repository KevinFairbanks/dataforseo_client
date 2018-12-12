<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06.07.2018
 * Time: 11:19.
 */

namespace DFSClient\Services\HttpClient\Contracts;

interface HttpContract
{
    /*
     *
     */
    public function sendSingleRequest($method, $url, $params);

    /*
     *
     */
    public function sendAsyncRequests( $args, $someData);
}

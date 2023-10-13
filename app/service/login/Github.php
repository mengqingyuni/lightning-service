<?php


namespace app\service\login;


class Github implements OauthInterface
{

    public function authorization(): string
    {
        // TODO: Implement authorization() method.
        
    }

    public function getAccessToken($code): mixed
    {
        // TODO: Implement getAccessToken() method.
    }

    public function getUserInfo($access_token): mixed
    {
        // TODO: Implement getUserInfo() method.
    }
}

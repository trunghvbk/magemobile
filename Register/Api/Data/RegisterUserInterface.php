<?php

namespace MageMobile\Register\Api\Data;

interface RegisterUserInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const USER_ID               = 'user_id';
    const EMAIL                 = 'email';
    const URL                   = 'url';
    const ACCESS_TOKEN          = 'access_token';
    const CREATED_AT            = 'created_at';
    const USAGE_CODE            = 'usage_code';
    /**#@-*/


    public function getEmail();

    public function getUrl();

    public function getCreatedAt();
  
    public function getAccessToken();
  
    public function getUserId();
    
    public function getUsageCode();
    
    public function setEmail($email);

    public function setUrl($url);

    public function setCreatedAt($createdAt);

    public function setAccessToken($token);
  
    public function setUserId($id);
    
    public function setUsageCode($code);
}

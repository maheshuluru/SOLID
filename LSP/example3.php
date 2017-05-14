<?php
/**
 * Derived classess must be substitutable for their base classes
 *
 * Signature and exception must be same.
 */

interface ProfileRopsitory
{
    public function get($userId);
}

class DBProfileRepoistory implements ProfileRopsitory
{
    public function get($userId)
    {
        return Profile::where('username', $userId)->get(); // return laravel Eloquent instance
    }
}

class SocialProfileRepoistory implements ProfileRopsitory
{
    public function get($userId)
    {
        // request social secial service for getting user profile
        return $this->getFacebookProfile($userId);
    }
    public function getFacebookProfile($username)
    {
        // logic goes here
        // make the API call and parse and return data as an array
        return array();
    }
}

// example consumer code
function getProfile($user, ProfileRopsitory $repo)
{
    $profile = $repo->get($user->id);
    if (!is_array($profile)) {
        // post conditioning violates LSP
    }
    // OR $profile->created_at->format() // throw exception
    // because eloquent instance dates are Carbon instance but array does not have format().
}

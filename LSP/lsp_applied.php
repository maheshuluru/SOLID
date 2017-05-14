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
        return Profile::where('username', $userId)->get()->toArray();
    }
}

class SocialProfileRepoistory implements ProfileRopsitory
{
    public function get($userId)
    {
        // request social secial service for getting user profile
        return $this->getFacebookProfile($userId); // probably array
    }
}

// example consumer code
function getProfile($user, ProfileRopsitory $repo)
{
    return $repo->get($user->id);
}
// Signature and exception must be same.
// avoid pre and pos conditions

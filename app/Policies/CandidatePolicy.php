<?php

namespace App\Policies;

use App\Models\Candidate;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidatePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param JobPost $jobPost
     * @return bool
     */
    public function apply (User $user, JobPost $jobPost) {
        return ! $jobPost->candidates->contains($user->candidate->id);
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Candidate  $candidate
     * @return mixed
     */
    public function view(User $user, Candidate $candidate)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Candidate  $candidate
     * @return mixed
     */
    public function update(User $user, Candidate $candidate)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Candidate  $candidate
     * @return mixed
     */
    public function delete(User $user, Candidate $candidate)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Candidate  $candidate
     * @return mixed
     */
    public function restore(User $user, Candidate $candidate)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Candidate  $candidate
     * @return mixed
     */
    public function forceDelete(User $user, Candidate $candidate)
    {
        //
    }
}

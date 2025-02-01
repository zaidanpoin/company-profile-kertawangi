<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AnggotaOrganisasi;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnggotaOrganisasiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_anggota::organisasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AnggotaOrganisasi $anggotaOrganisasi): bool
    {
        return $user->can('view_anggota::organisasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_anggota::organisasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AnggotaOrganisasi $anggotaOrganisasi): bool
    {
        return $user->can('update_anggota::organisasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AnggotaOrganisasi $anggotaOrganisasi): bool
    {
        return $user->can('delete_anggota::organisasi');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_anggota::organisasi');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, AnggotaOrganisasi $anggotaOrganisasi): bool
    {
        return $user->can('force_delete_anggota::organisasi');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_anggota::organisasi');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, AnggotaOrganisasi $anggotaOrganisasi): bool
    {
        return $user->can('restore_anggota::organisasi');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_anggota::organisasi');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, AnggotaOrganisasi $anggotaOrganisasi): bool
    {
        return $user->can('replicate_anggota::organisasi');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_anggota::organisasi');
    }
}

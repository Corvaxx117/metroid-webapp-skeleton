<?php

namespace App\Model;

use App\Security\User;
use Metroid\Database\Model\TableAbstractModel;

/**
 * Classe modèle exemple qui gère les utilisateurs.
 */
class UserModel extends TableAbstractModel
{
    protected string $table = 'users';

    /**
     * Trouve un utilisateur par son ID.
     * @param int $id L'identifiant de l'utilisateur
     * @return array|null L'utilisateur trouvé ou null si aucun utilisateur n'a été trouv
     */
    public function findUserById(int $id): ?array
    {
        return $this->findOneBy(['id' => $id]);
    }

    /**
     * Renvoie l'utilisateur sous forme d'objet User à partir de son ID.
     * @param int $id L'identifiant de l'utilisateur
     * @return User L'utilisateur trouvé
     */
    public function getUserObjectById(int $id): User
    {
        $data = $this->findUserById($id);
        return new User($data['id'], $data['name'], $data['email'], $data['is_admin'], $data['avatar']);
    }

    /**
     * Trouve un utilisateur par son email.
     * @param string $email L'email de l'utilisateur
     * @return array|null L'utilisateur sélection ou null si aucun utilisateur n'a été trouv
     */
    public function findUserByEmail(string $email): ?array
    {
        $user = $this->findOneBy(['email' => $email]);
        return $user;
    }

    /**
     * Créé un nouvel utilisateur.
     * @param array $data Les données de l'utilisateur
     */
    public function createUser(array $data): bool
    {
        return $this->create($data);
    }

    /**
     * Modifie les données de l'utilisateur.
     * @param int $id L'identifiant de l'utilisateur
     * @param array $data Les nouvelles données de l'utilisateur
     */
    public function updateUser(int $id, array $data): bool
    {
        return $this->update($id, $data);
    }

    /**
     * Supprime un utilisateur par son ID.
     * @param int $id L'identifiant de l'utilisateurà supprimer
     * @return bool : true si la suppression a réussi, false sinon.
     */
    public function deleteUser(int $id): bool
    {
        return $this->delete(['id' => $id]);
    }
}

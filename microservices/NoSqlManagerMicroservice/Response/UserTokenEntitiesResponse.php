<?php


namespace App\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;
use Spatie\Typed\Collection;
use Spatie\Typed\T;

class UserTokenEntitiesResponse
{
    private Collection $collection;

    public function __construct()
    {
        $this->collection = new Collection(T::generic(UserTokenEntity::class));
    }

    /**
     * @return Collection
     */
    public function getCollection(): Collection
    {
        return $this->collection;
    }

    /**
     * @param UserTokenEntity $userTokenEntity
     * @return UserTokenEntitiesResponse
     */
    public function addToCollection(UserTokenEntity $userTokenEntity): UserTokenEntitiesResponse
    {
        $this->collection[] = $userTokenEntity;

        return $this;
    }


}
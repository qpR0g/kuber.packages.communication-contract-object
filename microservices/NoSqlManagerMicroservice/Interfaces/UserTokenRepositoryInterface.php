<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Interfaces;


use Kubersoftware\Microservices\NosqlManagerMicroservice\Request\UserTokenRequest;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenEntitiesResponse;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenIdResponse;

interface UserTokenRepositoryInterface
{
    /**
     * @param UserTokenRequest $userTokenRequest
     * @return UserTokenIdResponse
     */
    public function insertOne(UserTokenRequest $userTokenRequest): UserTokenIdResponse;

    /**
     * @param array $userTokenEntity - массив из объектов UserTokenRequest
     * @return array - массив из объектов UserTokenIdResponse
     */
    public function insertMany(array $userTokenEntity): array;

    public function findByUserUuid(string $userUuid): UserTokenEntitiesResponse;

    public function updateOne(UserTokenRequest $userTokenEntity): UserTokenRequest;

    public function updateMany(UserTokenRequest $userTokenEntity): UserTokenRequest;
}
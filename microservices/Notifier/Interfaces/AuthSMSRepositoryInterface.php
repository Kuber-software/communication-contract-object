<?php

namespace Kubersoftware\Microservices\Notifier\Interfaces;

use Kubersoftware\Microservices\Notifier\Request\AuthSMSCodeAndCodeUuidRequest;
use Kubersoftware\Microservices\Notifier\Request\AuthSMSPhoneNumberRequest;
use Kubersoftware\Microservices\Notifier\Request\AuthSMSPhoneTokenRequest;
use Kubersoftware\Microservices\Notifier\Response\AuthSMSCodeUuidResponse;
use Kubersoftware\Microservices\Notifier\Response\AuthSMSPhoneTokenActiveResponse;
use Kubersoftware\Microservices\Notifier\Response\AuthSMSPhoneTokenResponse;

interface AuthSMSRepositoryInterface
{

    // todo getIdCode

    /**
     * @param AuthSMSPhoneNumberRequest $request
     * @return AuthSMSCodeUuidResponse
     */
    public function getCodeUuid(AuthSMSPhoneNumberRequest $request): AuthSMSCodeUuidResponse;

    /**
     * @param AuthSMSCodeAndCodeUuidRequest $request
     * @return AuthSMSPhoneTokenResponse
     */
    public function getTokenResponse(AuthSMSCodeAndCodeUuidRequest $request): AuthSMSPhoneTokenResponse;

    /**
     * @param AuthSMSPhoneTokenRequest $request
     * @return AuthSMSPhoneTokenActiveResponse
     */
    public function getTokenActiveResponse(AuthSMSPhoneTokenRequest $request): AuthSMSPhoneTokenActiveResponse;

}
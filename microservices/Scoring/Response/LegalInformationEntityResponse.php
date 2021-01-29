<?php


namespace Kubersoftware\Microservices\Scoring\Response;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\Scoring\Entity\LegalInformationEntity;

class LegalInformationEntityResponse extends BaseObject
{
    private LegalInformationEntity $legalInformationEntity;

    /**
     * @return LegalInformationEntity
     */
    public function getLegalInformationEntity(): LegalInformationEntity
    {
        return $this->legalInformationEntity;
    }

    /**
     * @param LegalInformationEntity $legalInformationEntity
     * @return LegalInformationEntityResponse
     */
    public function setLegalInformationEntity(LegalInformationEntity $legalInformationEntity): LegalInformationEntityResponse
    {
        $this->legalInformationEntity = $legalInformationEntity;
        return $this;
    }



}
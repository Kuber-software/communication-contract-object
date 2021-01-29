<?php


namespace Kubersoftware\Microservices\Scoring\Response;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\Scoring\Entity\IndividualInformationEntity;

class IndividualInformationEntityResponse extends BaseObject
{
    private IndividualInformationEntity $individualInformationEntity;

    /**
     * @return IndividualInformationEntity
     */
    public function getIndividualInformationEntity(): IndividualInformationEntity
    {
        return $this->individualInformationEntity;
    }

    /**
     * @param IndividualInformationEntity $individualInformationEntity
     * @return IndividualInformationEntityResponse
     */
    public function setIndividualInformationEntity(IndividualInformationEntity $individualInformationEntity): IndividualInformationEntityResponse
    {
        $this->individualInformationEntity = $individualInformationEntity;
        return $this;
    }


}
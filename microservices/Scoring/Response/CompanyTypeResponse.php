<?php


namespace Kubersoftware\Microservices\Scoring\Response;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\Scoring\Entity\EnumCompanyType;

class CompanyTypeResponse extends BaseObject
{
    private EnumCompanyType $enumCompanyType;

    /**
     * @return EnumCompanyType
     */
    public function getEnumCompanyType(): EnumCompanyType
    {
        return $this->enumCompanyType;
    }

    /**
     * @param EnumCompanyType $enumCompanyType
     * @return CompanyTypeResponse
     */
    public function setEnumCompanyType(EnumCompanyType $enumCompanyType): CompanyTypeResponse
    {
        $this->enumCompanyType = $enumCompanyType;
        return $this;
    }



}
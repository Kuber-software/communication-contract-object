<?php


namespace Kubersoftware\Microservices\Scoring\Entity;


use RuntimeException;

class EnumCompanyType
{
    /**
     * Компания типа ИП
     */
    public const INDIVIDUAL = 'INDIVIDUAL';

    /**
     * Компания типа ООО, ПАО и т.д.
     */
    public const LEGAL = 'LEGAL';

    private string $companyType;

    /**
     * @return string
     */
    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    /**
     * @param string $companyType
     * @return EnumCompanyType
     */
    public function setCompanyType(string $companyType): EnumCompanyType
    {
        if (!in_array($companyType, (new \ReflectionClass(__CLASS__))->getConstants(), true)) {
            throw new RuntimeException("Error, '$companyType' constant companyType does not exist in packages.communication-contract-object");
        }
        $this->companyType = $companyType;
        return $this;
    }


}
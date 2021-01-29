<?php


namespace Kubersoftware\Microservices\Scoring\Entity;


use RuntimeException;

class EnumStatusCompany
{

    /**
     * Действующая
     */
    public const ACTIVE = 'ACTIVE';

    /**
     * Ликвидируется
     */
    public const LIQUIDATING = 'LIQUIDATING';

    /**
     * Ликвидирована
     */
    public const LIQUIDATED = 'LIQUIDATED';

    /**
     * Банкротство (месяц год)
     */
    public const BANKRUPT = 'BANKRUPT';

    /**
     * В процессе присоединения к другому юрлицу, с последующей ликвидацией
     */
    public const REORGANIZING = 'REORGANIZING';


    private string $statusCompany;

    /**
     * @return string
     */
    public function getStatusCompany(): string
    {
        return $this->statusCompany;
    }

    /**
     * @param string $statusCompany
     * @return EnumStatusCompany
     */
    public function setStatusCompany(string $statusCompany): EnumStatusCompany
    {
        if (!in_array($statusCompany, (new \ReflectionClass(__CLASS__))->getConstants(), true)) {
            throw new RuntimeException("Error, '$statusCompany' constant statusCompany does not exist in packages.communication-contract-object");
        }
        $this->statusCompany = $statusCompany;
        return $this;
    }


}
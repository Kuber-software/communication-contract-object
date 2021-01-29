<?php


namespace Kubersoftware\Microservices\Scoring\Entity;


use DateTime;

class IndividualInformationEntity
{

    /**
     * Наименование
     * Краткое
     * Полное
     * @var string
     */
    private string $nameShort;
    private string $nameFull;

    /**
     * ИНН компании
     * @var string
     */
    private string $inn;

    /**
     * Код ОКПО
     * @var int
     */
    private int $okpo;

    /**
     * ОГРН
     * @var int
     */
    private int $ogrn;

    /**
     * Дата выдачи ОГРН
     * @var DateTime
     */
    private DateTime $ogrnDate;

    /**
     * Тип организации
     * INDIVIDUAL - Индивидуальный предприниматель
     * LEGAL - Юр лицо
     * @var EnumCompanyType
     */
    private EnumCompanyType $type;

    /**
     * ФИО руководителя
     * @var string
     */
    private string $managementName;

    /**
     * Адрес
     * @var string
     */
    private string $address;

    /**
     * Организационно-правовая форма
     * opfShort - краткое
     * opfFull - полное
     * @var string
     */
    private string $opfShort;
    private string $opfFull;

    /**
     * Система налогообложения
     * @var string
     */
    private string $taxSystem;

    /**
     * Статус организации
     * ACTIVE       — действующая
     * LIQUIDATING  — ликвидируется
     * LIQUIDATED   — ликвидирована
     * BANKRUPT     — банкротство (февраль 2021)
     * REORGANIZING — в процессе присоединения к другому юрлицу, с последующей ликвидацией
     * @var EnumStatusCompany
     */
    private EnumStatusCompany $status;

    /**
     * @return string
     */
    public function getNameShort(): string
    {
        return $this->nameShort;
    }

    /**
     * @param string $nameShort
     * @return IndividualInformationEntity
     */
    public function setNameShort(string $nameShort): IndividualInformationEntity
    {
        $this->nameShort = $nameShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameFull(): string
    {
        return $this->nameFull;
    }

    /**
     * @param string $nameFull
     * @return IndividualInformationEntity
     */
    public function setNameFull(string $nameFull): IndividualInformationEntity
    {
        $this->nameFull = $nameFull;
        return $this;
    }

    /**
     * @return string
     */
    public function getInn(): string
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     * @return IndividualInformationEntity
     */
    public function setInn(string $inn): IndividualInformationEntity
    {
        $this->inn = $inn;
        return $this;
    }

    /**
     * @return int
     */
    public function getOkpo(): int
    {
        return $this->okpo;
    }

    /**
     * @param int $okpo
     * @return IndividualInformationEntity
     */
    public function setOkpo(int $okpo): IndividualInformationEntity
    {
        $this->okpo = $okpo;
        return $this;
    }

    /**
     * @return int
     */
    public function getOgrn(): int
    {
        return $this->ogrn;
    }

    /**
     * @param int $ogrn
     * @return IndividualInformationEntity
     */
    public function setOgrn(int $ogrn): IndividualInformationEntity
    {
        $this->ogrn = $ogrn;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOgrnDate(): DateTime
    {
        return $this->ogrnDate;
    }

    /**
     * @param DateTime $ogrnDate
     * @return IndividualInformationEntity
     */
    public function setOgrnDate(DateTime $ogrnDate): IndividualInformationEntity
    {
        $this->ogrnDate = $ogrnDate;
        return $this;
    }

    /**
     * @return EnumCompanyType
     */
    public function getType(): EnumCompanyType
    {
        return $this->type;
    }

    /**
     * @param EnumCompanyType $type
     * @return IndividualInformationEntity
     */
    public function setType(EnumCompanyType $type): IndividualInformationEntity
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagementName(): string
    {
        return $this->managementName;
    }

    /**
     * @param string $managementName
     * @return IndividualInformationEntity
     */
    public function setManagementName(string $managementName): IndividualInformationEntity
    {
        $this->managementName = $managementName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return IndividualInformationEntity
     */
    public function setAddress(string $address): IndividualInformationEntity
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpfShort(): string
    {
        return $this->opfShort;
    }

    /**
     * @param string $opfShort
     * @return IndividualInformationEntity
     */
    public function setOpfShort(string $opfShort): IndividualInformationEntity
    {
        $this->opfShort = $opfShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpfFull(): string
    {
        return $this->opfFull;
    }

    /**
     * @param string $opfFull
     * @return IndividualInformationEntity
     */
    public function setOpfFull(string $opfFull): IndividualInformationEntity
    {
        $this->opfFull = $opfFull;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxSystem(): string
    {
        return $this->taxSystem;
    }

    /**
     * @param string $taxSystem
     * @return IndividualInformationEntity
     */
    public function setTaxSystem(string $taxSystem): IndividualInformationEntity
    {
        $this->taxSystem = $taxSystem;
        return $this;
    }

    /**
     * @return EnumStatusCompany
     */
    public function getStatus(): EnumStatusCompany
    {
        return $this->status;
    }

    /**
     * @param EnumStatusCompany $status
     * @return IndividualInformationEntity
     */
    public function setStatus(EnumStatusCompany $status): IndividualInformationEntity
    {
        $this->status = $status;
        return $this;
    }

}
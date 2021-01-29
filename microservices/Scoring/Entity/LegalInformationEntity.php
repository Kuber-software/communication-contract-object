<?php


namespace Kubersoftware\Microservices\Scoring\Entity;


use DateTime;

/**
 * Entity для организация типа ООО, ПАО, ОАО и т.д.
 */
class LegalInformationEntity
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
     * КПП
     * @var int
     */
    private int $kpp;

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
     * Должность руководителя
     * @var string
     */
    private string $managementPost;

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
     * @return LegalInformationEntity
     */
    public function setNameShort(string $nameShort): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setNameFull(string $nameFull): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setInn(string $inn): LegalInformationEntity
    {
        $this->inn = $inn;
        return $this;
    }

    /**
     * @return int
     */
    public function getKpp(): int
    {
        return $this->kpp;
    }

    /**
     * @param int $kpp
     * @return LegalInformationEntity
     */
    public function setKpp(int $kpp): LegalInformationEntity
    {
        $this->kpp = $kpp;
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
     * @return LegalInformationEntity
     */
    public function setOkpo(int $okpo): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setOgrn(int $ogrn): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setOgrnDate(DateTime $ogrnDate): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setType(EnumCompanyType $type): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setManagementName(string $managementName): LegalInformationEntity
    {
        $this->managementName = $managementName;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagementPost(): string
    {
        return $this->managementPost;
    }

    /**
     * @param string $managementPost
     * @return LegalInformationEntity
     */
    public function setManagementPost(string $managementPost): LegalInformationEntity
    {
        $this->managementPost = $managementPost;
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
     * @return LegalInformationEntity
     */
    public function setAddress(string $address): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setOpfShort(string $opfShort): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setOpfFull(string $opfFull): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setTaxSystem(string $taxSystem): LegalInformationEntity
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
     * @return LegalInformationEntity
     */
    public function setStatus(EnumStatusCompany $status): LegalInformationEntity
    {
        $this->status = $status;
        return $this;
    }



}
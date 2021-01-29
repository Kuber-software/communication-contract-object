<?php


namespace Kubersoftware\Microservices\Scoring\Entity;


use DateTime;

/**
 * Entity для организация типа ООО, ПАО, ОАО и т.д.
 */
class LegalInformationEntity
{
    /**
     * Наименование компании
     * @var string
     */
    private string $nameCompany;

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
     * ИНН
     * @var string
     */
    private string $typeCompany;

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
     * @var string
     */
    private string $opf;

    /**
     * Система налогообложения
     * @var string
     */
    private string $taxSystem;

}
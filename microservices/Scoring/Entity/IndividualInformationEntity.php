<?php


namespace Kubersoftware\Microservices\Scoring\Entity;


class IndividualInformationEntity
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
     * Код ОКПО
     * @var int
     */
    private int $okpo;

}
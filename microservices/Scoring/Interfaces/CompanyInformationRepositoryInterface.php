<?php


namespace Kubersoftware\Microservices\Scoring\Interfaces;


use Kubersoftware\Microservices\Scoring\Request\CompanyByInnTypeRequest;
use Kubersoftware\Microservices\Scoring\Request\CompanyInnRequest;
use Kubersoftware\Microservices\Scoring\Response\CompanyInformationEntityResponse;
use Kubersoftware\Microservices\Scoring\Response\CompanyTypeResponse;

interface CompanyInformationRepositoryInterface
{
    /**
     * @param CompanyByInnTypeRequest $companyByInnTypeRequest
     * @return CompanyInformationEntityResponse
     */
    public function getInformationCompany(CompanyByInnTypeRequest $companyByInnTypeRequest): CompanyInformationEntityResponse;

    /**
     * @param CompanyInnRequest $companyInnRequest
     * @return CompanyTypeResponse
     */
    public function getTypeCompanyByInn(CompanyInnRequest $companyInnRequest): CompanyTypeResponse;

}
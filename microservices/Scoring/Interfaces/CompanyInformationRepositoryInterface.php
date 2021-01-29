<?php


namespace Kubersoftware\Microservices\Scoring\Interfaces;


use Kubersoftware\Microservices\Scoring\Request\CompanyInnRequest;
use Kubersoftware\Microservices\Scoring\Response\IndividualInformationEntityResponse;
use Kubersoftware\Microservices\Scoring\Response\CompanyTypeResponse;
use Kubersoftware\Microservices\Scoring\Response\LegalInformationEntityResponse;

interface CompanyInformationRepositoryInterface
{
    /**
     * @param CompanyInnRequest $companyInnRequest
     * @return IndividualInformationEntityResponse
     */
    public function getInformationCompanyLegal(CompanyInnRequest $companyInnRequest): IndividualInformationEntityResponse;

    /**
     * @param CompanyInnRequest $companyInnRequest
     * @return LegalInformationEntityResponse
     */
    public function getInformationCompanyIndividual(CompanyInnRequest $companyInnRequest): LegalInformationEntityResponse;

    /**
     * @param CompanyInnRequest $companyInnRequest
     * @return CompanyTypeResponse
     */
    public function getTypeCompanyByInn(CompanyInnRequest $companyInnRequest): CompanyTypeResponse;

}
<?php


namespace Kubersoftware\Microservices\Scrutinizer;


use RuntimeException;

class EnumScrutinizerStatus
{

    /**
     * Новая задача
     */
    public const NEW = 'New';

    /**
     * Задача в ожидании принятия в работу
     */
    public const PENDING = 'Pending';

    /**
     * Задача выполняется
     */
    public const IN_PROGRESS = 'InProgress';

    /**
     * Задача отложена
     */
    public const DEFERRED = 'Deferred';

    /**
     * Задача завершена
     */
    public const COMPLETED = 'Completed';

    /**
     * Задача завершена с ошибкой
     */
    public const COMPLETED_ERROR = 'CompletedError';


    private string $status;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return EnumScrutinizerStatus|string
     */
    public function setStatus(string $status)
    {
        if (!in_array($status, (new \ReflectionClass(__CLASS__))->getConstants(), true)) {
            throw new RuntimeException("Error, '$status' constant status does not exist in packages.communication-contract-object");
        }
        $this->status = $status;
        return $this;
    }


}
<?php


namespace Kubersoftware\Microservices;


class EnumStatus
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
     * @return EnumStatus|string
     */
    public function setStatus(string $status)
    {
        if (!in_array($status, (new \ReflectionClass(__CLASS__))->getConstants(), true)) {
            return "Error, '$status' constant does not exist";
        }
        $this->status = $status;
        return $this;
    }


}
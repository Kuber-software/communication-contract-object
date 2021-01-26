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

}
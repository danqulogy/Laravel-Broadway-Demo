<?php namespace Modules\Parts\Repositories;

use Broadway\EventHandling\EventBusInterface;
use Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory;
use Broadway\EventSourcing\EventSourcingRepository;
use Broadway\EventStore\EventStoreInterface;
use Modules\Parts\Entities\Part;

class MysqlEventStorePartRepository extends EventSourcingRepository implements EventStorePartRepository
{
    public function __construct(EventStoreInterface $eventStore, EventBusInterface $eventBus)
    {
        parent::__construct($eventStore, $eventBus, Part::class, new PublicConstructorAggregateFactory());
    }
}
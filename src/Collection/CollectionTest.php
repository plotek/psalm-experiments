<?php declare(strict_types=1);

namespace PsalmExperiments\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use PsalmExperiments\Common\ApiClient;
use PsalmExperiments\Common\Model\CityValueObject;

final class CollectionTest
{
    /** @var ApiClient */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function withPsalmErrors(): void
    {
        $data = $this->client->getData();

        (new ArrayCollection($data['cities']))->map(function (array $value): CityValueObject {
            return CityValueObject::fromApi($value);
        });
    }

    public function withoutPsalmErrors(): void
    {
        $data = $this->client->getData();

        /** @psalm-var array<array-key, array> $cities */
        $cities = $data['cities'];
        (new ArrayCollection($cities))->map(function (array $value): CityValueObject {
            return CityValueObject::fromApi($value);
        });
    }
}

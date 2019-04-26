<?php declare(strict_types=1);

namespace PsalmExperiments\Common\Model;

final class CityValueObject
{
    /** @var string */
    private $name;
    /** @var string */
    private $province;

    private function __construct(string $name, string $province)
    {
        $this->name = $name;
        $this->province = $province;
    }

    public static function fromApi(array $data): self
    {
        return new self($data['name'], $data['province']);
    }
}

<?php declare(strict_types=1);

namespace PsalmExperiments\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use PsalmExperiments\Common\Model\CityValueObject;

final class EmptyCollectionTest
{
    /**
     * @return Collection|CityValueObject[]
     */
    public function doSomething(): Collection
    {
        if (rand()) {
            return new ArrayCollection();
        }

        return new ArrayCollection([CityValueObject::random()]);
    }
}

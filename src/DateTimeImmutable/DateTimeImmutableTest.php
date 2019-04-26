<?php declare(strict_types=1);

namespace PsalmExperiments\DateTimeImmutable;

final class DateTimeImmutableTest
{
    /** @var int */
    private $year;

    private function __construct(int $year)
    {
        $this->year = $year;
    }

    public static function currentYear(\DateTimeImmutable $now): self
    {
        return new self((int) $now->format('Y'));
    }
}

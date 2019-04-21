<?php

declare(strict_types=1);

namespace TZachi;

use InvalidArgumentException;

/**
 * @coversDefaultClass
 * @runTestsInSeparateProcesses
 */
class DocblockGroups
{
    /**
     * Grouping of attributes for normal methods
     *
     * @internal
     * @deprecated
     *
     * @link http://www.php.net
     * @see This
     *
     * @uses
     *
     * @ORM\Entity
     * @ODM\Entity
     *
     * @param mixed $banana
     *
     * @return mixed
     *
     * @throws InvalidArgumentException When argument is invalid
     */
    public function annotationsTest($banana)
    {
        return $banana;
    }

    /**
     * Grouping of attributes for phpunit tests
     *
     * @test
     * @group
     * @depends
     * @depends
     * @dataProvider
     * @runInSeparateProcess
     *
     * @expectedDeprecation
     * @expectedException
     * @expectedExceptionCode
     * @expectedExceptionMessage
     * @expectedExceptionMessageRegExp
     *
     * @uses
     *
     * @covers
     * @coversNothing
     */
    public function phpunitAnnotationsTest(): void
    {
    }
}

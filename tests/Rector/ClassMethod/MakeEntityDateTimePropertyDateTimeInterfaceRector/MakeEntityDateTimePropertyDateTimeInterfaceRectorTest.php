<?php

declare(strict_types=1);

namespace Rector\Doctrine\Tests\Rector\ClassMethod\MakeEntityDateTimePropertyDateTimeInterfaceRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class MakeEntityDateTimePropertyDateTimeInterfaceRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}

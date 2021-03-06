<?php

namespace Kunstmaan\FormBundle\Tests\Entity\PageParts;

use Kunstmaan\FormBundle\Entity\PageParts\AbstractFormPagePart;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-21 at 09:48:21.
 */
class AbstractFormPagePartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractFormPagePart
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForAbstractClass("Kunstmaan\FormBundle\Entity\PageParts\AbstractFormPagePart");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\PageParts\AbstractFormPagePart::getUniqueId
     */
    public function testGetUniqueId()
    {
        $object = $this->object;
        $object->getUniqueId();
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\PageParts\AbstractFormPagePart::setLabel
     * @covers Kunstmaan\FormBundle\Entity\PageParts\AbstractFormPagePart::getLabel
     */
    public function testSetGetLabel()
    {
        $object = $this->object;
        $value = "Some label";
        $object->setLabel($value);
        $this->assertEquals($value, $object->getLabel());
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\PageParts\AbstractFormPagePart::getAdminView
     */
    public function testGetAdminView()
    {
        $stringValue = $this->object->getAdminView();
        $this->assertNotNull($stringValue);
        $this->assertTrue(is_string($stringValue));
    }
}

<?php

namespace RedditBotAlpha\Model;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-06-30 at 20:38:22.
 */
class ThingTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Thing
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Thing;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    public function testSanity()
    {
        $this->assertInstanceOf('\RedditBotAlpha\Model\Thing', $this->object);
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getUps
     */
    public function testGetUps() {
        // Remove the following lines when you implement this test.
        $this->object->setUps(69);
        $this->assertSame(69, $this->object->getUps());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setUps
     * @todo   Implement testSetUps().
     */
    public function testSetUps() {
        // Remove the following lines when you implement this test.
        $this->object->setUps(69);
        $this->assertSame(69, $this->object->getUps());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getDowns
     */
    public function testGetDowns() {
        $this->object->setDowns(13);
        $this->assertSame(13, $this->object->getDowns());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setDowns
     */
    public function testSetDowns() {
        $this->object->setDowns(13);
        $this->assertSame(13, $this->object->getDowns());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getLikes
     */
    public function testGetLikes() {
        $this->object->setLikes(TRUE);
        $this->assertSame(TRUE, $this->object->getLikes());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setLikes
     */
    public function testSetLikes() {
        $this->object->setLikes(TRUE);
        $this->assertSame(TRUE, $this->object->getLikes());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getCreated
     */
    public function testGetCreated() {
        $value = 0+ '12345.6';
        $this->object->setCreated($value);
        $this->assertSame($value, $this->object->getCreated());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setCreated
     */
    public function testSetCreated() {
        $value = 0+ '65432.1';
        $this->object->setCreated($value);
        $this->assertSame($value, $this->object->getCreated());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getCreatedUtc
     */
    public function testGetCreatedUtc() {
        $value = 0+ '12345.6';
        $this->object->setCreated($value);
        $this->assertSame($value, $this->object->getCreated());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setCreatedUtc
     */
    public function testSetCreatedUtc() {
        $value = 0+ '65432.1';
        $this->object->setCreated($value);
        $this->assertSame($value, $this->object->getCreated());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getId
     */
    public function testGetId() {
        $value = 'awja983454';
        $this->object->setId($value);
        $this->assertSame($value, $this->object->getId());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setId
     */
    public function testSetId() {
        $value = 'j9398ua8';
        $this->object->setId($value);
        $this->assertSame($value, $this->object->getId());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getName
     */
    public function testGetName() {
        $value = 'oisjf928as';
        $this->object->setId($value);
        $this->assertSame($value, $this->object->getId());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setName
     */
    public function testSetName() {
        $value = 'isaj3u45a';
        $this->object->setId($value);
        $this->assertSame($value, $this->object->getId());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getKind
     */
    public function testGetKind() { 
        $value = 'Listing';
        $this->object->setKind($value);
        $this->assertSame($value, $this->object->getKind());
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setKind
     */
    public function testSetKind() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::getData
     */
    public function testGetData() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers RedditBotAlpha\Model\Thing::setData
     */
    public function testSetData() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}

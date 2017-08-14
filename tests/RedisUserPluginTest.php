<?php
namespace Test;


use Domain\User;
use Storage\User\RedisUserPlugin;

class RedisUserPluginTest extends \Codeception\Test\Unit
{
    /**
     * @var \Test\
     */
    protected $tester;
    protected $plugin;
    protected $user;

    protected function _before()
    {
        $this->user = new User('parker@parkersmith.us', 'divsmith');
        $this->plugin = new RedisUserPlugin();
        $this->plugin->delete($this->user->email());
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->plugin->persist($this->user);
        $user = $this->plugin->getByEmail($this->user->email());

        $this->assertEquals($this->user->email(), $user->email());
        $this->assertEquals($this->user->alias(), $user->alias());
    }
}
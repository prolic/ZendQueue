<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Queue
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace ZendTest\Queue\Adapter;

/**
 * @category   Zend
 * @package    Zend_Queue
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Queue
 * @group      disable
 */
class StompTest extends AdapterTest
{
    /**
     * getAdapterName() is an method to help make AdapterTest work with any
     * new adapters
     *
     * You must overload this method
     *
     * @return string
     */
    public function getAdapterName()
    {
        return 'Stomp';
    }

    /**
     * getAdapterName() is an method to help make AdapterTest work with any
     * new adapters
     *
     * You may overload this method.  The default return is
     * 'Zend_Queue_Adapter_' . $this->getAdapterName()
     *
     * @return string
     */
    public function getAdapterFullName()
    {
        return '\Zend\Queue\Adapter\\' . $this->getAdapterName();
    }

    public function getTestConfig()
    {
        return array('driverOptions' => array('host' => '127.0.0.1',
                                              'port' => '61613'));
    }

    /**
     * Stomped requires specific name types
     */
    public function createQueueName($name)
    {
        return '/temp-queue/' . $name;
    }

    public function testConst()
    {
        $this->assertTrue(is_string(\Zend\Queue\Adapter\Stomp::DEFAULT_SCHEME));
        $this->assertTrue(is_string(\Zend\Queue\Adapter\Stomp::DEFAULT_HOST));
        $this->assertTrue(is_integer(\Zend\Queue\Adapter\Stomp::DEFAULT_PORT));
    }
}

<?php
/**
 * TechDivision\ApplicationServer\Api\Node\HostNode
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * DTO to transfer a host.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class HostNode extends AbstractNode
{

    /**
     * The host name.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $name;

    /**
     * The applications base directory.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $appBase;

    /**
     * The server admin's mail address.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $serverAdmin;

    /**
     * The server's software signature.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $serverSoftware;

    /**
     * The server's vhosts configuration.
     *
     * @var array
     * @AS\Mapping(nodeName="vhosts/vhost", nodeType="array", elementType="TechDivision\ApplicationServer\Api\Node\VhostNode")
     */
    protected $vhosts = array();

    /**
     * Returns the host name.
     *
     * @return string The host name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the applications base directory.
     *
     * @return string The applications base directory
     */
    public function getAppBase()
    {
        return $this->appBase;
    }

    /**
     * Returns the server admin's mail address.
     *
     * @return string The server admin's mail address
     */
    public function getServerAdmin()
    {
        return $this->serverAdmin;
    }

    /**
     * Returns the server's software signature.
     *
     * @return string The server's software signature
     */
    public function getServerSoftware()
    {
        return $this->serverSoftware;
    }

    /**
     * Returns the server's vhosts configuration.
     *
     * @return array The server's vhosts configuration
     */
    public function getVhosts()
    {
        return $this->vhosts;
    }
}

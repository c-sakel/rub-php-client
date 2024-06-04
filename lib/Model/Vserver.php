<?php
/**
 * Vserver
 *
 * PHP version 5
 *
 * @category Class
 * @package  c-sakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RESELLING.SERVICES API
 *
 * Auf folgender Seite finden Sie die Beschreibung der RESELLING.SERVICES Schnittstelle  <!--<a href=\"https://reselling.services/api-docs?lang=en\" title=\"Englische Dokumentation\">Dokumentation in Englisch</a>-->
 *
 * OpenAPI spec version: 1.9.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace c-sakel\RUBClient\Model;

use \ArrayAccess;
use \c-sakel\RUBClient\ObjectSerializer;

/**
 * Vserver Class Doc Comment
 *
 * @category Class
 * @package  c-sakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Vserver implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Vserver';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'hostname' => 'string',
        'cores' => 'int',
        'memory' => 'int',
        'disk' => 'int',
        'ip_addresses' => 'int',
        'ip6_addresses' => 'int',
        'max_backups' => 'int',
        'password' => 'string',
        'template_id' => 'int',
        'template_title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'hostname' => null,
        'cores' => null,
        'memory' => null,
        'disk' => null,
        'ip_addresses' => null,
        'ip6_addresses' => null,
        'max_backups' => null,
        'password' => null,
        'template_id' => null,
        'template_title' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'hostname' => 'hostname',
        'cores' => 'cores',
        'memory' => 'memory',
        'disk' => 'disk',
        'ip_addresses' => 'ip_addresses',
        'ip6_addresses' => 'ip6_addresses',
        'max_backups' => 'max_backups',
        'password' => 'password',
        'template_id' => 'template_id',
        'template_title' => 'template_title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'hostname' => 'setHostname',
        'cores' => 'setCores',
        'memory' => 'setMemory',
        'disk' => 'setDisk',
        'ip_addresses' => 'setIpAddresses',
        'ip6_addresses' => 'setIp6Addresses',
        'max_backups' => 'setMaxBackups',
        'password' => 'setPassword',
        'template_id' => 'setTemplateId',
        'template_title' => 'setTemplateTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'hostname' => 'getHostname',
        'cores' => 'getCores',
        'memory' => 'getMemory',
        'disk' => 'getDisk',
        'ip_addresses' => 'getIpAddresses',
        'ip6_addresses' => 'getIp6Addresses',
        'max_backups' => 'getMaxBackups',
        'password' => 'getPassword',
        'template_id' => 'getTemplateId',
        'template_title' => 'getTemplateTitle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['cores'] = isset($data['cores']) ? $data['cores'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['ip_addresses'] = isset($data['ip_addresses']) ? $data['ip_addresses'] : null;
        $this->container['ip6_addresses'] = isset($data['ip6_addresses']) ? $data['ip6_addresses'] : null;
        $this->container['max_backups'] = isset($data['max_backups']) ? $data['max_backups'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['template_title'] = isset($data['template_title']) ? $data['template_title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname hostname
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets cores
     *
     * @return int
     */
    public function getCores()
    {
        return $this->container['cores'];
    }

    /**
     * Sets cores
     *
     * @param int $cores cores
     *
     * @return $this
     */
    public function setCores($cores)
    {
        $this->container['cores'] = $cores;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets disk
     *
     * @return int
     */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
     * Sets disk
     *
     * @param int $disk disk
     *
     * @return $this
     */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;

        return $this;
    }

    /**
     * Gets ip_addresses
     *
     * @return int
     */
    public function getIpAddresses()
    {
        return $this->container['ip_addresses'];
    }

    /**
     * Sets ip_addresses
     *
     * @param int $ip_addresses ip_addresses
     *
     * @return $this
     */
    public function setIpAddresses($ip_addresses)
    {
        $this->container['ip_addresses'] = $ip_addresses;

        return $this;
    }

    /**
     * Gets ip6_addresses
     *
     * @return int
     */
    public function getIp6Addresses()
    {
        return $this->container['ip6_addresses'];
    }

    /**
     * Sets ip6_addresses
     *
     * @param int $ip6_addresses ip6_addresses
     *
     * @return $this
     */
    public function setIp6Addresses($ip6_addresses)
    {
        $this->container['ip6_addresses'] = $ip6_addresses;

        return $this;
    }

    /**
     * Gets max_backups
     *
     * @return int
     */
    public function getMaxBackups()
    {
        return $this->container['max_backups'];
    }

    /**
     * Sets max_backups
     *
     * @param int $max_backups max_backups
     *
     * @return $this
     */
    public function setMaxBackups($max_backups)
    {
        $this->container['max_backups'] = $max_backups;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int $template_id template_id
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets template_title
     *
     * @return string
     */
    public function getTemplateTitle()
    {
        return $this->container['template_title'];
    }

    /**
     * Sets template_title
     *
     * @param string $template_title template_title
     *
     * @return $this
     */
    public function setTemplateTitle($template_title)
    {
        $this->container['template_title'] = $template_title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

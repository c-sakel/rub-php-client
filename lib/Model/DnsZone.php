<?php
/**
 * DnsZone
 *
 * PHP version 5
 *
 * @category Class
 * @package  csakel\RUBClient
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

namespace csakel\RUBClient\Model;

use \ArrayAccess;
use \csakel\RUBClient\ObjectSerializer;

/**
 * DnsZone Class Doc Comment
 *
 * @category Class
 * @package  csakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DnsZone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DnsZone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'name_unicode' => 'string',
        'serial' => 'string',
        'hostmaster' => 'string',
        'refresh' => 'int',
        'retry' => 'int',
        'expire' => 'int',
        'ttl' => 'int',
        'ns1' => 'string',
        'ns2' => 'string',
        'ns3' => 'string',
        'ns4' => 'string',
        'ns5' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'name_unicode' => null,
        'serial' => null,
        'hostmaster' => null,
        'refresh' => null,
        'retry' => null,
        'expire' => null,
        'ttl' => null,
        'ns1' => null,
        'ns2' => null,
        'ns3' => null,
        'ns4' => null,
        'ns5' => null,
        'created_at' => 'date',
        'updated_at' => 'date'
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
        'name' => 'name',
        'name_unicode' => 'nameUnicode',
        'serial' => 'serial',
        'hostmaster' => 'hostmaster',
        'refresh' => 'refresh',
        'retry' => 'retry',
        'expire' => 'expire',
        'ttl' => 'ttl',
        'ns1' => 'ns1',
        'ns2' => 'ns2',
        'ns3' => 'ns3',
        'ns4' => 'ns4',
        'ns5' => 'ns5',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'name_unicode' => 'setNameUnicode',
        'serial' => 'setSerial',
        'hostmaster' => 'setHostmaster',
        'refresh' => 'setRefresh',
        'retry' => 'setRetry',
        'expire' => 'setExpire',
        'ttl' => 'setTtl',
        'ns1' => 'setNs1',
        'ns2' => 'setNs2',
        'ns3' => 'setNs3',
        'ns4' => 'setNs4',
        'ns5' => 'setNs5',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'name_unicode' => 'getNameUnicode',
        'serial' => 'getSerial',
        'hostmaster' => 'getHostmaster',
        'refresh' => 'getRefresh',
        'retry' => 'getRetry',
        'expire' => 'getExpire',
        'ttl' => 'getTtl',
        'ns1' => 'getNs1',
        'ns2' => 'getNs2',
        'ns3' => 'getNs3',
        'ns4' => 'getNs4',
        'ns5' => 'getNs5',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_unicode'] = isset($data['name_unicode']) ? $data['name_unicode'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['hostmaster'] = isset($data['hostmaster']) ? $data['hostmaster'] : null;
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['ns1'] = isset($data['ns1']) ? $data['ns1'] : null;
        $this->container['ns2'] = isset($data['ns2']) ? $data['ns2'] : null;
        $this->container['ns3'] = isset($data['ns3']) ? $data['ns3'] : null;
        $this->container['ns4'] = isset($data['ns4']) ? $data['ns4'] : null;
        $this->container['ns5'] = isset($data['ns5']) ? $data['ns5'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_unicode
     *
     * @return string
     */
    public function getNameUnicode()
    {
        return $this->container['name_unicode'];
    }

    /**
     * Sets name_unicode
     *
     * @param string $name_unicode name_unicode
     *
     * @return $this
     */
    public function setNameUnicode($name_unicode)
    {
        $this->container['name_unicode'] = $name_unicode;

        return $this;
    }

    /**
     * Gets serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param string $serial serial
     *
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets hostmaster
     *
     * @return string
     */
    public function getHostmaster()
    {
        return $this->container['hostmaster'];
    }

    /**
     * Sets hostmaster
     *
     * @param string $hostmaster hostmaster
     *
     * @return $this
     */
    public function setHostmaster($hostmaster)
    {
        $this->container['hostmaster'] = $hostmaster;

        return $this;
    }

    /**
     * Gets refresh
     *
     * @return int
     */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
     * Sets refresh
     *
     * @param int $refresh refresh
     *
     * @return $this
     */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return int
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param int $retry retry
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return int
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param int $expire expire
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return int
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param int $ttl ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets ns1
     *
     * @return string
     */
    public function getNs1()
    {
        return $this->container['ns1'];
    }

    /**
     * Sets ns1
     *
     * @param string $ns1 ns1
     *
     * @return $this
     */
    public function setNs1($ns1)
    {
        $this->container['ns1'] = $ns1;

        return $this;
    }

    /**
     * Gets ns2
     *
     * @return string
     */
    public function getNs2()
    {
        return $this->container['ns2'];
    }

    /**
     * Sets ns2
     *
     * @param string $ns2 ns2
     *
     * @return $this
     */
    public function setNs2($ns2)
    {
        $this->container['ns2'] = $ns2;

        return $this;
    }

    /**
     * Gets ns3
     *
     * @return string
     */
    public function getNs3()
    {
        return $this->container['ns3'];
    }

    /**
     * Sets ns3
     *
     * @param string $ns3 ns3
     *
     * @return $this
     */
    public function setNs3($ns3)
    {
        $this->container['ns3'] = $ns3;

        return $this;
    }

    /**
     * Gets ns4
     *
     * @return string
     */
    public function getNs4()
    {
        return $this->container['ns4'];
    }

    /**
     * Sets ns4
     *
     * @param string $ns4 ns4
     *
     * @return $this
     */
    public function setNs4($ns4)
    {
        $this->container['ns4'] = $ns4;

        return $this;
    }

    /**
     * Gets ns5
     *
     * @return string
     */
    public function getNs5()
    {
        return $this->container['ns5'];
    }

    /**
     * Sets ns5
     *
     * @param string $ns5 ns5
     *
     * @return $this
     */
    public function setNs5($ns5)
    {
        $this->container['ns5'] = $ns5;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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

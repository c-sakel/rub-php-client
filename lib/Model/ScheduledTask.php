<?php
/**
 * ScheduledTask
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ScheduledTask Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduledTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'first_execution_at' => '\DateTime',
        'next_execution_at' => '\DateTime',
        'last_execution_at' => '\DateTime',
        'method' => 'string',
        'interval_human' => 'string',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'first_execution_at' => 'date',
        'next_execution_at' => 'date',
        'last_execution_at' => 'date',
        'method' => null,
        'interval_human' => null,
        'created_at' => 'date'
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
        'first_execution_at' => 'first_execution_at',
        'next_execution_at' => 'next_execution_at',
        'last_execution_at' => 'last_execution_at',
        'method' => 'method',
        'interval_human' => 'interval_human',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'first_execution_at' => 'setFirstExecutionAt',
        'next_execution_at' => 'setNextExecutionAt',
        'last_execution_at' => 'setLastExecutionAt',
        'method' => 'setMethod',
        'interval_human' => 'setIntervalHuman',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'first_execution_at' => 'getFirstExecutionAt',
        'next_execution_at' => 'getNextExecutionAt',
        'last_execution_at' => 'getLastExecutionAt',
        'method' => 'getMethod',
        'interval_human' => 'getIntervalHuman',
        'created_at' => 'getCreatedAt'
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
        $this->container['first_execution_at'] = isset($data['first_execution_at']) ? $data['first_execution_at'] : null;
        $this->container['next_execution_at'] = isset($data['next_execution_at']) ? $data['next_execution_at'] : null;
        $this->container['last_execution_at'] = isset($data['last_execution_at']) ? $data['last_execution_at'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['interval_human'] = isset($data['interval_human']) ? $data['interval_human'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * Gets first_execution_at
     *
     * @return \DateTime
     */
    public function getFirstExecutionAt()
    {
        return $this->container['first_execution_at'];
    }

    /**
     * Sets first_execution_at
     *
     * @param \DateTime $first_execution_at first_execution_at
     *
     * @return $this
     */
    public function setFirstExecutionAt($first_execution_at)
    {
        $this->container['first_execution_at'] = $first_execution_at;

        return $this;
    }

    /**
     * Gets next_execution_at
     *
     * @return \DateTime
     */
    public function getNextExecutionAt()
    {
        return $this->container['next_execution_at'];
    }

    /**
     * Sets next_execution_at
     *
     * @param \DateTime $next_execution_at next_execution_at
     *
     * @return $this
     */
    public function setNextExecutionAt($next_execution_at)
    {
        $this->container['next_execution_at'] = $next_execution_at;

        return $this;
    }

    /**
     * Gets last_execution_at
     *
     * @return \DateTime
     */
    public function getLastExecutionAt()
    {
        return $this->container['last_execution_at'];
    }

    /**
     * Sets last_execution_at
     *
     * @param \DateTime $last_execution_at last_execution_at
     *
     * @return $this
     */
    public function setLastExecutionAt($last_execution_at)
    {
        $this->container['last_execution_at'] = $last_execution_at;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets interval_human
     *
     * @return string
     */
    public function getIntervalHuman()
    {
        return $this->container['interval_human'];
    }

    /**
     * Sets interval_human
     *
     * @param string $interval_human interval_human
     *
     * @return $this
     */
    public function setIntervalHuman($interval_human)
    {
        $this->container['interval_human'] = $interval_human;

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
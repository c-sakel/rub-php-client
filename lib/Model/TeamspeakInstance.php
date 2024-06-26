<?php
/**
 * TeamspeakInstance
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
 * TeamspeakInstance Class Doc Comment
 *
 * @category Class
 * @package  csakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamspeakInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TeamspeakInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'ip_address' => 'string',
        'query_port' => 'int',
        'query_username' => 'string',
        'query_password' => 'string',
        'average_clients' => 'int',
        'current_slots' => 'int',
        'price_per_slot' => 'string',
        'current_price' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'ip_address' => null,
        'query_port' => null,
        'query_username' => null,
        'query_password' => null,
        'average_clients' => null,
        'current_slots' => null,
        'price_per_slot' => null,
        'current_price' => null
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
        'ip_address' => 'ip_address',
        'query_port' => 'query_port',
        'query_username' => 'query_username',
        'query_password' => 'query_password',
        'average_clients' => 'averageClients',
        'current_slots' => 'currentSlots',
        'price_per_slot' => 'pricePerSlot',
        'current_price' => 'currentPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'ip_address' => 'setIpAddress',
        'query_port' => 'setQueryPort',
        'query_username' => 'setQueryUsername',
        'query_password' => 'setQueryPassword',
        'average_clients' => 'setAverageClients',
        'current_slots' => 'setCurrentSlots',
        'price_per_slot' => 'setPricePerSlot',
        'current_price' => 'setCurrentPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'ip_address' => 'getIpAddress',
        'query_port' => 'getQueryPort',
        'query_username' => 'getQueryUsername',
        'query_password' => 'getQueryPassword',
        'average_clients' => 'getAverageClients',
        'current_slots' => 'getCurrentSlots',
        'price_per_slot' => 'getPricePerSlot',
        'current_price' => 'getCurrentPrice'
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
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['query_port'] = isset($data['query_port']) ? $data['query_port'] : null;
        $this->container['query_username'] = isset($data['query_username']) ? $data['query_username'] : null;
        $this->container['query_password'] = isset($data['query_password']) ? $data['query_password'] : null;
        $this->container['average_clients'] = isset($data['average_clients']) ? $data['average_clients'] : null;
        $this->container['current_slots'] = isset($data['current_slots']) ? $data['current_slots'] : null;
        $this->container['price_per_slot'] = isset($data['price_per_slot']) ? $data['price_per_slot'] : null;
        $this->container['current_price'] = isset($data['current_price']) ? $data['current_price'] : null;
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
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets query_port
     *
     * @return int
     */
    public function getQueryPort()
    {
        return $this->container['query_port'];
    }

    /**
     * Sets query_port
     *
     * @param int $query_port query_port
     *
     * @return $this
     */
    public function setQueryPort($query_port)
    {
        $this->container['query_port'] = $query_port;

        return $this;
    }

    /**
     * Gets query_username
     *
     * @return string
     */
    public function getQueryUsername()
    {
        return $this->container['query_username'];
    }

    /**
     * Sets query_username
     *
     * @param string $query_username query_username
     *
     * @return $this
     */
    public function setQueryUsername($query_username)
    {
        $this->container['query_username'] = $query_username;

        return $this;
    }

    /**
     * Gets query_password
     *
     * @return string
     */
    public function getQueryPassword()
    {
        return $this->container['query_password'];
    }

    /**
     * Sets query_password
     *
     * @param string $query_password query_password
     *
     * @return $this
     */
    public function setQueryPassword($query_password)
    {
        $this->container['query_password'] = $query_password;

        return $this;
    }

    /**
     * Gets average_clients
     *
     * @return int
     */
    public function getAverageClients()
    {
        return $this->container['average_clients'];
    }

    /**
     * Sets average_clients
     *
     * @param int $average_clients average_clients
     *
     * @return $this
     */
    public function setAverageClients($average_clients)
    {
        $this->container['average_clients'] = $average_clients;

        return $this;
    }

    /**
     * Gets current_slots
     *
     * @return int
     */
    public function getCurrentSlots()
    {
        return $this->container['current_slots'];
    }

    /**
     * Sets current_slots
     *
     * @param int $current_slots current_slots
     *
     * @return $this
     */
    public function setCurrentSlots($current_slots)
    {
        $this->container['current_slots'] = $current_slots;

        return $this;
    }

    /**
     * Gets price_per_slot
     *
     * @return string
     */
    public function getPricePerSlot()
    {
        return $this->container['price_per_slot'];
    }

    /**
     * Sets price_per_slot
     *
     * @param string $price_per_slot price_per_slot
     *
     * @return $this
     */
    public function setPricePerSlot($price_per_slot)
    {
        $this->container['price_per_slot'] = $price_per_slot;

        return $this;
    }

    /**
     * Gets current_price
     *
     * @return string
     */
    public function getCurrentPrice()
    {
        return $this->container['current_price'];
    }

    /**
     * Sets current_price
     *
     * @param string $current_price current_price
     *
     * @return $this
     */
    public function setCurrentPrice($current_price)
    {
        $this->container['current_price'] = $current_price;

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

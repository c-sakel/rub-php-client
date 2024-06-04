<?php
/**
 * PleskLicense
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
 * PleskLicense Class Doc Comment
 *
 * @category Class
 * @package  c-sakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PleskLicense implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PleskLicense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'license' => 'string',
        'key' => 'string',
        'type' => 'string',
        'used' => 'bool',
        'ip_address' => 'string',
        'mac_address' => 'string',
        'date_register' => '\DateTime',
        'date_update' => '\DateTime',
        'expire' => '\DateTime',
        'orderdate' => '\DateTime',
        'comment' => 'string',
        'days' => 'int',
        'additional_keys' => '\c-sakel\RUBClient\Model\PleskLicenseAdditionalKey[]',
        'addons' => '\c-sakel\RUBClient\Model\PleskLicenseAddon[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'license' => null,
        'key' => null,
        'type' => null,
        'used' => null,
        'ip_address' => null,
        'mac_address' => null,
        'date_register' => 'date',
        'date_update' => 'date',
        'expire' => 'date',
        'orderdate' => 'date',
        'comment' => null,
        'days' => null,
        'additional_keys' => null,
        'addons' => null
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
        'license' => 'license',
        'key' => 'key',
        'type' => 'type',
        'used' => 'used',
        'ip_address' => 'ip_address',
        'mac_address' => 'mac_address',
        'date_register' => 'date_register',
        'date_update' => 'date_update',
        'expire' => 'expire',
        'orderdate' => 'orderdate',
        'comment' => 'comment',
        'days' => 'days',
        'additional_keys' => 'additional_keys',
        'addons' => 'addons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'license' => 'setLicense',
        'key' => 'setKey',
        'type' => 'setType',
        'used' => 'setUsed',
        'ip_address' => 'setIpAddress',
        'mac_address' => 'setMacAddress',
        'date_register' => 'setDateRegister',
        'date_update' => 'setDateUpdate',
        'expire' => 'setExpire',
        'orderdate' => 'setOrderdate',
        'comment' => 'setComment',
        'days' => 'setDays',
        'additional_keys' => 'setAdditionalKeys',
        'addons' => 'setAddons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'license' => 'getLicense',
        'key' => 'getKey',
        'type' => 'getType',
        'used' => 'getUsed',
        'ip_address' => 'getIpAddress',
        'mac_address' => 'getMacAddress',
        'date_register' => 'getDateRegister',
        'date_update' => 'getDateUpdate',
        'expire' => 'getExpire',
        'orderdate' => 'getOrderdate',
        'comment' => 'getComment',
        'days' => 'getDays',
        'additional_keys' => 'getAdditionalKeys',
        'addons' => 'getAddons'
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
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['date_register'] = isset($data['date_register']) ? $data['date_register'] : null;
        $this->container['date_update'] = isset($data['date_update']) ? $data['date_update'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['orderdate'] = isset($data['orderdate']) ? $data['orderdate'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['additional_keys'] = isset($data['additional_keys']) ? $data['additional_keys'] : null;
        $this->container['addons'] = isset($data['addons']) ? $data['addons'] : null;
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
     * Gets license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string $license license
     *
     * @return $this
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets used
     *
     * @return bool
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param bool $used used
     *
     * @return $this
     */
    public function setUsed($used)
    {
        $this->container['used'] = $used;

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
     * Gets mac_address
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string $mac_address mac_address
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets date_register
     *
     * @return \DateTime
     */
    public function getDateRegister()
    {
        return $this->container['date_register'];
    }

    /**
     * Sets date_register
     *
     * @param \DateTime $date_register date_register
     *
     * @return $this
     */
    public function setDateRegister($date_register)
    {
        $this->container['date_register'] = $date_register;

        return $this;
    }

    /**
     * Gets date_update
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->container['date_update'];
    }

    /**
     * Sets date_update
     *
     * @param \DateTime $date_update date_update
     *
     * @return $this
     */
    public function setDateUpdate($date_update)
    {
        $this->container['date_update'] = $date_update;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param \DateTime $expire expire
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets orderdate
     *
     * @return \DateTime
     */
    public function getOrderdate()
    {
        return $this->container['orderdate'];
    }

    /**
     * Sets orderdate
     *
     * @param \DateTime $orderdate orderdate
     *
     * @return $this
     */
    public function setOrderdate($orderdate)
    {
        $this->container['orderdate'] = $orderdate;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int $days days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets additional_keys
     *
     * @return \c-sakel\RUBClient\Model\PleskLicenseAdditionalKey[]
     */
    public function getAdditionalKeys()
    {
        return $this->container['additional_keys'];
    }

    /**
     * Sets additional_keys
     *
     * @param \c-sakel\RUBClient\Model\PleskLicenseAdditionalKey[] $additional_keys Array mit zusätzlichen Produktschlüsseln
     *
     * @return $this
     */
    public function setAdditionalKeys($additional_keys)
    {
        $this->container['additional_keys'] = $additional_keys;

        return $this;
    }

    /**
     * Gets addons
     *
     * @return \c-sakel\RUBClient\Model\PleskLicenseAddon[]
     */
    public function getAddons()
    {
        return $this->container['addons'];
    }

    /**
     * Sets addons
     *
     * @param \c-sakel\RUBClient\Model\PleskLicenseAddon[] $addons Array mit Addons
     *
     * @return $this
     */
    public function setAddons($addons)
    {
        $this->container['addons'] = $addons;

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

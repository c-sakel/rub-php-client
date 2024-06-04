<?php
/**
 * VserverStatus
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
 * VserverStatus Class Doc Comment
 *
 * @category Class
 * @package  c-sakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VserverStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VserverStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'object',
        'status_title' => 'string',
        'running_installation' => 'object',
        'disk_information' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'status_title' => null,
        'running_installation' => null,
        'disk_information' => null
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
        'status' => 'status',
        'status_title' => 'statusTitle',
        'running_installation' => 'runningInstallation',
        'disk_information' => 'diskInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'status_title' => 'setStatusTitle',
        'running_installation' => 'setRunningInstallation',
        'disk_information' => 'setDiskInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'status_title' => 'getStatusTitle',
        'running_installation' => 'getRunningInstallation',
        'disk_information' => 'getDiskInformation'
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

    const STATUS_TITLE_INSTALLATION_RUNNING = 'INSTALLATION_RUNNING';
    const STATUS_TITLE_OPERATION_RUNNING = 'OPERATION_RUNNING';
    const STATUS_TITLE_ONLINE = 'ONLINE';
    const STATUS_TITLE_OFFLINE = 'OFFLINE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusTitleAllowableValues()
    {
        return [
            self::STATUS_TITLE_INSTALLATION_RUNNING,
            self::STATUS_TITLE_OPERATION_RUNNING,
            self::STATUS_TITLE_ONLINE,
            self::STATUS_TITLE_OFFLINE,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_title'] = isset($data['status_title']) ? $data['status_title'] : null;
        $this->container['running_installation'] = isset($data['running_installation']) ? $data['running_installation'] : null;
        $this->container['disk_information'] = isset($data['disk_information']) ? $data['disk_information'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusTitleAllowableValues();
        if (!is_null($this->container['status_title']) && !in_array($this->container['status_title'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_title', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets status
     *
     * @return object
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param object $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_title
     *
     * @return string
     */
    public function getStatusTitle()
    {
        return $this->container['status_title'];
    }

    /**
     * Sets status_title
     *
     * @param string $status_title Mögliche Werte: INSTALLATION_RUNNING, OPERATION_RUNNING, ONLINE, OFFLINE
     *
     * @return $this
     */
    public function setStatusTitle($status_title)
    {
        $allowedValues = $this->getStatusTitleAllowableValues();
        if (!is_null($status_title) && !in_array($status_title, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_title', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_title'] = $status_title;

        return $this;
    }

    /**
     * Gets running_installation
     *
     * @return object
     */
    public function getRunningInstallation()
    {
        return $this->container['running_installation'];
    }

    /**
     * Sets running_installation
     *
     * @param object $running_installation running_installation
     *
     * @return $this
     */
    public function setRunningInstallation($running_installation)
    {
        $this->container['running_installation'] = $running_installation;

        return $this;
    }

    /**
     * Gets disk_information
     *
     * @return object
     */
    public function getDiskInformation()
    {
        return $this->container['disk_information'];
    }

    /**
     * Sets disk_information
     *
     * @param object $disk_information disk_information
     *
     * @return $this
     */
    public function setDiskInformation($disk_information)
    {
        $this->container['disk_information'] = $disk_information;

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

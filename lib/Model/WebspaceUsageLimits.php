<?php
/**
 * WebspaceUsageLimits
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
 * WebspaceUsageLimits Class Doc Comment
 *
 * @category Class
 * @package  c-sakel\RUBClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebspaceUsageLimits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebspaceUsage_limits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clients' => 'int',
        'domains' => 'int',
        'subdomains' => 'int',
        'domain_aliases' => 'int',
        'disk_space' => 'int',
        'databases' => 'int',
        'mailboxes' => 'int',
        'traffic' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clients' => null,
        'domains' => null,
        'subdomains' => null,
        'domain_aliases' => null,
        'disk_space' => null,
        'databases' => null,
        'mailboxes' => null,
        'traffic' => null
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
        'clients' => 'clients',
        'domains' => 'domains',
        'subdomains' => 'subdomains',
        'domain_aliases' => 'domain_aliases',
        'disk_space' => 'disk_space',
        'databases' => 'databases',
        'mailboxes' => 'mailboxes',
        'traffic' => 'traffic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clients' => 'setClients',
        'domains' => 'setDomains',
        'subdomains' => 'setSubdomains',
        'domain_aliases' => 'setDomainAliases',
        'disk_space' => 'setDiskSpace',
        'databases' => 'setDatabases',
        'mailboxes' => 'setMailboxes',
        'traffic' => 'setTraffic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clients' => 'getClients',
        'domains' => 'getDomains',
        'subdomains' => 'getSubdomains',
        'domain_aliases' => 'getDomainAliases',
        'disk_space' => 'getDiskSpace',
        'databases' => 'getDatabases',
        'mailboxes' => 'getMailboxes',
        'traffic' => 'getTraffic'
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
        $this->container['clients'] = isset($data['clients']) ? $data['clients'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['subdomains'] = isset($data['subdomains']) ? $data['subdomains'] : null;
        $this->container['domain_aliases'] = isset($data['domain_aliases']) ? $data['domain_aliases'] : null;
        $this->container['disk_space'] = isset($data['disk_space']) ? $data['disk_space'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['mailboxes'] = isset($data['mailboxes']) ? $data['mailboxes'] : null;
        $this->container['traffic'] = isset($data['traffic']) ? $data['traffic'] : null;
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
     * Gets clients
     *
     * @return int
     */
    public function getClients()
    {
        return $this->container['clients'];
    }

    /**
     * Sets clients
     *
     * @param int $clients clients
     *
     * @return $this
     */
    public function setClients($clients)
    {
        $this->container['clients'] = $clients;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return int
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param int $domains domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets subdomains
     *
     * @return int
     */
    public function getSubdomains()
    {
        return $this->container['subdomains'];
    }

    /**
     * Sets subdomains
     *
     * @param int $subdomains subdomains
     *
     * @return $this
     */
    public function setSubdomains($subdomains)
    {
        $this->container['subdomains'] = $subdomains;

        return $this;
    }

    /**
     * Gets domain_aliases
     *
     * @return int
     */
    public function getDomainAliases()
    {
        return $this->container['domain_aliases'];
    }

    /**
     * Sets domain_aliases
     *
     * @param int $domain_aliases domain_aliases
     *
     * @return $this
     */
    public function setDomainAliases($domain_aliases)
    {
        $this->container['domain_aliases'] = $domain_aliases;

        return $this;
    }

    /**
     * Gets disk_space
     *
     * @return int
     */
    public function getDiskSpace()
    {
        return $this->container['disk_space'];
    }

    /**
     * Sets disk_space
     *
     * @param int $disk_space disk_space
     *
     * @return $this
     */
    public function setDiskSpace($disk_space)
    {
        $this->container['disk_space'] = $disk_space;

        return $this;
    }

    /**
     * Gets databases
     *
     * @return int
     */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
     * Sets databases
     *
     * @param int $databases databases
     *
     * @return $this
     */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;

        return $this;
    }

    /**
     * Gets mailboxes
     *
     * @return int
     */
    public function getMailboxes()
    {
        return $this->container['mailboxes'];
    }

    /**
     * Sets mailboxes
     *
     * @param int $mailboxes mailboxes
     *
     * @return $this
     */
    public function setMailboxes($mailboxes)
    {
        $this->container['mailboxes'] = $mailboxes;

        return $this;
    }

    /**
     * Gets traffic
     *
     * @return int
     */
    public function getTraffic()
    {
        return $this->container['traffic'];
    }

    /**
     * Sets traffic
     *
     * @param int $traffic traffic
     *
     * @return $this
     */
    public function setTraffic($traffic)
    {
        $this->container['traffic'] = $traffic;

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

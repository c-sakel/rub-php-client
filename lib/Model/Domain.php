<?php
/**
 * Domain
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
 * Domain Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Domain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sld' => 'string',
        'tld' => 'string',
        'name' => 'string',
        'name_unicode' => 'string',
        'owner_c' => 'string',
        'admin_c' => 'string',
        'tech_c' => 'string',
        'zone_c' => 'string',
        'create' => '\DateTime',
        'expire' => '\DateTime',
        'delete' => '\DateTime',
        'suspended_at' => '\DateTime',
        'suspended_until' => '\DateTime',
        'authinfo' => 'string',
        'status' => 'string',
        'zone_id' => 'int',
        'ns1' => 'string',
        'ns2' => 'string',
        'ns3' => 'string',
        'ns4' => 'string',
        'ns5' => 'string',
        'premium_price_class' => 'string',
        'verification_until' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'sld' => null,
        'tld' => null,
        'name' => null,
        'name_unicode' => null,
        'owner_c' => null,
        'admin_c' => null,
        'tech_c' => null,
        'zone_c' => null,
        'create' => 'date',
        'expire' => 'date',
        'delete' => 'date',
        'suspended_at' => 'date',
        'suspended_until' => 'date',
        'authinfo' => null,
        'status' => null,
        'zone_id' => null,
        'ns1' => null,
        'ns2' => null,
        'ns3' => null,
        'ns4' => null,
        'ns5' => null,
        'premium_price_class' => null,
        'verification_until' => 'date'
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
        'sld' => 'sld',
        'tld' => 'tld',
        'name' => 'name',
        'name_unicode' => 'nameUnicode',
        'owner_c' => 'ownerC',
        'admin_c' => 'adminC',
        'tech_c' => 'techC',
        'zone_c' => 'zoneC',
        'create' => 'create',
        'expire' => 'expire',
        'delete' => 'delete',
        'suspended_at' => 'suspended_at',
        'suspended_until' => 'suspended_until',
        'authinfo' => 'authinfo',
        'status' => 'status',
        'zone_id' => 'zone_id',
        'ns1' => 'ns1',
        'ns2' => 'ns2',
        'ns3' => 'ns3',
        'ns4' => 'ns4',
        'ns5' => 'ns5',
        'premium_price_class' => 'premium_price_class',
        'verification_until' => 'verification_until'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sld' => 'setSld',
        'tld' => 'setTld',
        'name' => 'setName',
        'name_unicode' => 'setNameUnicode',
        'owner_c' => 'setOwnerC',
        'admin_c' => 'setAdminC',
        'tech_c' => 'setTechC',
        'zone_c' => 'setZoneC',
        'create' => 'setCreate',
        'expire' => 'setExpire',
        'delete' => 'setDelete',
        'suspended_at' => 'setSuspendedAt',
        'suspended_until' => 'setSuspendedUntil',
        'authinfo' => 'setAuthinfo',
        'status' => 'setStatus',
        'zone_id' => 'setZoneId',
        'ns1' => 'setNs1',
        'ns2' => 'setNs2',
        'ns3' => 'setNs3',
        'ns4' => 'setNs4',
        'ns5' => 'setNs5',
        'premium_price_class' => 'setPremiumPriceClass',
        'verification_until' => 'setVerificationUntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sld' => 'getSld',
        'tld' => 'getTld',
        'name' => 'getName',
        'name_unicode' => 'getNameUnicode',
        'owner_c' => 'getOwnerC',
        'admin_c' => 'getAdminC',
        'tech_c' => 'getTechC',
        'zone_c' => 'getZoneC',
        'create' => 'getCreate',
        'expire' => 'getExpire',
        'delete' => 'getDelete',
        'suspended_at' => 'getSuspendedAt',
        'suspended_until' => 'getSuspendedUntil',
        'authinfo' => 'getAuthinfo',
        'status' => 'getStatus',
        'zone_id' => 'getZoneId',
        'ns1' => 'getNs1',
        'ns2' => 'getNs2',
        'ns3' => 'getNs3',
        'ns4' => 'getNs4',
        'ns5' => 'getNs5',
        'premium_price_class' => 'getPremiumPriceClass',
        'verification_until' => 'getVerificationUntil'
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

    const STATUS_OK = 'OK';
    const STATUS_PENDING = 'PENDING';
    const STATUS_QUARANTINED = 'QUARANTINED';
    const STATUS_SUSPENDED = 'SUSPENDED';
    const STATUS_RESTRICTED = 'RESTRICTED';
    const STATUS_DELAYED = 'DELAYED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_RGP = 'RGP';
    const STATUS_LOCK = 'LOCK';
    const STATUS_HOLD_LOCK = 'HOLD LOCK';
    const STATUS_HOLD = 'HOLD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_PENDING,
            self::STATUS_QUARANTINED,
            self::STATUS_SUSPENDED,
            self::STATUS_RESTRICTED,
            self::STATUS_DELAYED,
            self::STATUS_FAILED,
            self::STATUS_RGP,
            self::STATUS_LOCK,
            self::STATUS_HOLD_LOCK,
            self::STATUS_HOLD,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sld'] = isset($data['sld']) ? $data['sld'] : null;
        $this->container['tld'] = isset($data['tld']) ? $data['tld'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_unicode'] = isset($data['name_unicode']) ? $data['name_unicode'] : null;
        $this->container['owner_c'] = isset($data['owner_c']) ? $data['owner_c'] : null;
        $this->container['admin_c'] = isset($data['admin_c']) ? $data['admin_c'] : null;
        $this->container['tech_c'] = isset($data['tech_c']) ? $data['tech_c'] : null;
        $this->container['zone_c'] = isset($data['zone_c']) ? $data['zone_c'] : null;
        $this->container['create'] = isset($data['create']) ? $data['create'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['suspended_at'] = isset($data['suspended_at']) ? $data['suspended_at'] : null;
        $this->container['suspended_until'] = isset($data['suspended_until']) ? $data['suspended_until'] : null;
        $this->container['authinfo'] = isset($data['authinfo']) ? $data['authinfo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
        $this->container['ns1'] = isset($data['ns1']) ? $data['ns1'] : null;
        $this->container['ns2'] = isset($data['ns2']) ? $data['ns2'] : null;
        $this->container['ns3'] = isset($data['ns3']) ? $data['ns3'] : null;
        $this->container['ns4'] = isset($data['ns4']) ? $data['ns4'] : null;
        $this->container['ns5'] = isset($data['ns5']) ? $data['ns5'] : null;
        $this->container['premium_price_class'] = isset($data['premium_price_class']) ? $data['premium_price_class'] : null;
        $this->container['verification_until'] = isset($data['verification_until']) ? $data['verification_until'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets sld
     *
     * @return string
     */
    public function getSld()
    {
        return $this->container['sld'];
    }

    /**
     * Sets sld
     *
     * @param string $sld sld
     *
     * @return $this
     */
    public function setSld($sld)
    {
        $this->container['sld'] = $sld;

        return $this;
    }

    /**
     * Gets tld
     *
     * @return string
     */
    public function getTld()
    {
        return $this->container['tld'];
    }

    /**
     * Sets tld
     *
     * @param string $tld tld
     *
     * @return $this
     */
    public function setTld($tld)
    {
        $this->container['tld'] = $tld;

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
     * Gets owner_c
     *
     * @return string
     */
    public function getOwnerC()
    {
        return $this->container['owner_c'];
    }

    /**
     * Sets owner_c
     *
     * @param string $owner_c Inhaber Handle
     *
     * @return $this
     */
    public function setOwnerC($owner_c)
    {
        $this->container['owner_c'] = $owner_c;

        return $this;
    }

    /**
     * Gets admin_c
     *
     * @return string
     */
    public function getAdminC()
    {
        return $this->container['admin_c'];
    }

    /**
     * Sets admin_c
     *
     * @param string $admin_c Admin Handle
     *
     * @return $this
     */
    public function setAdminC($admin_c)
    {
        $this->container['admin_c'] = $admin_c;

        return $this;
    }

    /**
     * Gets tech_c
     *
     * @return string
     */
    public function getTechC()
    {
        return $this->container['tech_c'];
    }

    /**
     * Sets tech_c
     *
     * @param string $tech_c Tech Handle
     *
     * @return $this
     */
    public function setTechC($tech_c)
    {
        $this->container['tech_c'] = $tech_c;

        return $this;
    }

    /**
     * Gets zone_c
     *
     * @return string
     */
    public function getZoneC()
    {
        return $this->container['zone_c'];
    }

    /**
     * Sets zone_c
     *
     * @param string $zone_c Zone Handle
     *
     * @return $this
     */
    public function setZoneC($zone_c)
    {
        $this->container['zone_c'] = $zone_c;

        return $this;
    }

    /**
     * Gets create
     *
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param \DateTime $create Erstellungsdatum der Domain
     *
     * @return $this
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

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
     * @param \DateTime $expire Ablaufdatum der Domain
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets delete
     *
     * @return \DateTime
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param \DateTime $delete Eingetragenes/Geplantes Kündigungsdatum der Domain
     *
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets suspended_at
     *
     * @return \DateTime
     */
    public function getSuspendedAt()
    {
        return $this->container['suspended_at'];
    }

    /**
     * Sets suspended_at
     *
     * @param \DateTime $suspended_at RGP (Redemption Grace Period) Startzeit der Domain, kann auch null sein.
     *
     * @return $this
     */
    public function setSuspendedAt($suspended_at)
    {
        $this->container['suspended_at'] = $suspended_at;

        return $this;
    }

    /**
     * Gets suspended_until
     *
     * @return \DateTime
     */
    public function getSuspendedUntil()
    {
        return $this->container['suspended_until'];
    }

    /**
     * Sets suspended_until
     *
     * @param \DateTime $suspended_until RGP (Redemption Grace Period) Endzeit der Domain, kann auch null sein.
     *
     * @return $this
     */
    public function setSuspendedUntil($suspended_until)
    {
        $this->container['suspended_until'] = $suspended_until;

        return $this;
    }

    /**
     * Gets authinfo
     *
     * @return string
     */
    public function getAuthinfo()
    {
        return $this->container['authinfo'];
    }

    /**
     * Sets authinfo
     *
     * @param string $authinfo authinfo
     *
     * @return $this
     */
    public function setAuthinfo($authinfo)
    {
        $this->container['authinfo'] = $authinfo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Aktueller Status der Domain
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets zone_id
     *
     * @return int
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     *
     * @param int $zone_id ID der verknüpften Domain-Zone. Dieser Wert ist veraltet und wird in Zukunft immer 0 zurückgeben!
     *
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

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
     * @param string $ns1 1. Nameserver der Domain
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
     * @param string $ns2 2. Nameserver der Domain
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
     * @param string $ns3 3. Nameserver der Domain
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
     * @param string $ns4 4. Nameserver der Domain
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
     * @param string $ns5 5. Nameserver der Domain
     *
     * @return $this
     */
    public function setNs5($ns5)
    {
        $this->container['ns5'] = $ns5;

        return $this;
    }

    /**
     * Gets premium_price_class
     *
     * @return string
     */
    public function getPremiumPriceClass()
    {
        return $this->container['premium_price_class'];
    }

    /**
     * Sets premium_price_class
     *
     * @param string $premium_price_class Dieser Wert gibt die Preisklasse der Domain zurück und ist ausschließlich für Premium Domains hinterlegt.
     *
     * @return $this
     */
    public function setPremiumPriceClass($premium_price_class)
    {
        $this->container['premium_price_class'] = $premium_price_class;

        return $this;
    }

    /**
     * Gets verification_until
     *
     * @return \DateTime
     */
    public function getVerificationUntil()
    {
        return $this->container['verification_until'];
    }

    /**
     * Sets verification_until
     *
     * @param \DateTime $verification_until Dieser Wert gibt an, wann die Inhaber Handle Verifizierung abläuft und die Domain daraufhin von der Registry gesperrt wird.
     *
     * @return $this
     */
    public function setVerificationUntil($verification_until)
    {
        $this->container['verification_until'] = $verification_until;

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
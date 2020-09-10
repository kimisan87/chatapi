<?php
/**
 * InstanceStatusStatusData
 *
 * PHP version 5
 *
 * @category Class
 * @package  chatapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Chat API SDK
 *
 * The SDK allows you to receive and send messages through your WhatsApp account. [Sign up now](https://app.chat-api.com/)  The Chat API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace chatapi\chatapi;

use \ArrayAccess;
use \chatapi\ObjectSerializer;

/**
 * InstanceStatusStatusData Class Doc Comment
 *
 * @category Class
 * @description More information about instance status
 * @package  chatapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InstanceStatusStatusData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InstanceStatus_statusData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'substatus' => 'string',
        'title' => 'string',
        'msg' => 'string',
        'submsg' => 'string',
        'actions' => '\chatapi\chatapi\InstanceStatusStatusDataActions',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'substatus' => null,
        'title' => null,
        'msg' => null,
        'submsg' => null,
        'actions' => null,
        'reason' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'substatus' => 'substatus',
        'title' => 'title',
        'msg' => 'msg',
        'submsg' => 'submsg',
        'actions' => 'actions',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'substatus' => 'setSubstatus',
        'title' => 'setTitle',
        'msg' => 'setMsg',
        'submsg' => 'setSubmsg',
        'actions' => 'setActions',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'substatus' => 'getSubstatus',
        'title' => 'getTitle',
        'msg' => 'getMsg',
        'submsg' => 'getSubmsg',
        'actions' => 'getActions',
        'reason' => 'getReason'
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
        return self::$openAPIModelName;
    }

    const SUBSTATUS_NORMAL = 'normal';
    const SUBSTATUS_LOADING = 'loading';
    const SUBSTATUS_OFFLINE = 'offline';
    const SUBSTATUS_EXPIRED = 'expired';
    const SUBSTATUS_OPENING = 'opening';
    const SUBSTATUS_PAIRING = 'pairing';
    const SUBSTATUS_TIMEOUT = 'timeout';
    const SUBSTATUS_COMPUTER = 'computer';
    const SUBSTATUS_PHONE = 'phone';
    const SUBSTATUS_BATTERY_LOW_1 = 'battery_low_1';
    const SUBSTATUS_BATTERY_LOW_2 = 'battery_low_2';
    const REASON_CONNECTING = 'connecting';
    const REASON_SYNCING = 'syncing';
    const REASON_OFFLINE = 'offline';
    const REASON_PROXYBLOCK = 'proxyblock';
    const REASON_CONFLICT = 'conflict';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubstatusAllowableValues()
    {
        return [
            self::SUBSTATUS_NORMAL,
            self::SUBSTATUS_LOADING,
            self::SUBSTATUS_OFFLINE,
            self::SUBSTATUS_EXPIRED,
            self::SUBSTATUS_OPENING,
            self::SUBSTATUS_PAIRING,
            self::SUBSTATUS_TIMEOUT,
            self::SUBSTATUS_COMPUTER,
            self::SUBSTATUS_PHONE,
            self::SUBSTATUS_BATTERY_LOW_1,
            self::SUBSTATUS_BATTERY_LOW_2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_CONNECTING,
            self::REASON_SYNCING,
            self::REASON_OFFLINE,
            self::REASON_PROXYBLOCK,
            self::REASON_CONFLICT,
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
        $this->container['substatus'] = isset($data['substatus']) ? $data['substatus'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['submsg'] = isset($data['submsg']) ? $data['submsg'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubstatusAllowableValues();
        if (!is_null($this->container['substatus']) && !in_array($this->container['substatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'substatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets substatus
     *
     * @return string|null
     */
    public function getSubstatus()
    {
        return $this->container['substatus'];
    }

    /**
     * Sets substatus
     *
     * @param string|null $substatus Instance Substatus
     *
     * @return $this
     */
    public function setSubstatus($substatus)
    {
        $allowedValues = $this->getSubstatusAllowableValues();
        if (!is_null($substatus) && !in_array($substatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'substatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['substatus'] = $substatus;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Status title in the language of the instance
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg Status message in the language of the instance
     *
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets submsg
     *
     * @return string|null
     */
    public function getSubmsg()
    {
        return $this->container['submsg'];
    }

    /**
     * Sets submsg
     *
     * @param string|null $submsg Additional status message in the language of the instance
     *
     * @return $this
     */
    public function setSubmsg($submsg)
    {
        $this->container['submsg'] = $submsg;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \chatapi\chatapi\InstanceStatusStatusDataActions|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \chatapi\chatapi\InstanceStatusStatusDataActions|null $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason why the instance is in \"loading\" status
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


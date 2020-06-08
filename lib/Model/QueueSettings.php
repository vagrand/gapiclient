<?php
/**
 * QueueSettings
 *
 * PHP version 7.1
 *
 * @category Class
 * @package  GenericApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Generic API
 *
 * Стандартизованное API коннектора, предназначенного для интеграции с внешним источником данных. Общая спецификация [тут](https://co-ms.atlassian.net/wiki/spaces/NC/pages/85852315/Generic+API)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GenericApi\Client\Model;

use \ArrayAccess;
use \GenericApi\Client\ObjectSerializer;

/**
 * QueueSettings Class Doc Comment
 *
 * @category Class
 * @package  GenericApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QueueSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QueueSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'host' => 'string',
        'port' => 'int',
        'user' => 'string',
        'password' => 'string',
        'vhost' => 'string',
        'exchange' => '\GenericApi\Client\Model\QueueSettingsExchange',
        'queue' => '\GenericApi\Client\Model\QueueSettingsQueue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'host' => null,
        'port' => 'int32',
        'user' => null,
        'password' => null,
        'vhost' => null,
        'exchange' => null,
        'queue' => null
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
        'host' => 'host',
        'port' => 'port',
        'user' => 'user',
        'password' => 'password',
        'vhost' => 'vhost',
        'exchange' => 'exchange',
        'queue' => 'queue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host' => 'setHost',
        'port' => 'setPort',
        'user' => 'setUser',
        'password' => 'setPassword',
        'vhost' => 'setVhost',
        'exchange' => 'setExchange',
        'queue' => 'setQueue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host' => 'getHost',
        'port' => 'getPort',
        'user' => 'getUser',
        'password' => 'getPassword',
        'vhost' => 'getVhost',
        'exchange' => 'getExchange',
        'queue' => 'getQueue'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['vhost'] === null) {
            $invalidProperties[] = "'vhost' can't be null";
        }
        if ($this->container['exchange'] === null) {
            $invalidProperties[] = "'exchange' can't be null";
        }
        if ($this->container['queue'] === null) {
            $invalidProperties[] = "'queue' can't be null";
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
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * Gets vhost
     *
     * @return string
     */
    public function getVhost()
    {
        return $this->container['vhost'];
    }

    /**
     * Sets vhost
     *
     * @param string $vhost vhost
     *
     * @return $this
     */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return \GenericApi\Client\Model\QueueSettingsExchange
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param \GenericApi\Client\Model\QueueSettingsExchange $exchange exchange
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets queue
     *
     * @return \GenericApi\Client\Model\QueueSettingsQueue
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param \GenericApi\Client\Model\QueueSettingsQueue $queue queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

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


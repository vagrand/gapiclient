<?php
/**
 * InlineObject9
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
 * InlineObject9 Class Doc Comment
 *
 * @category Class
 * @package  GenericApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject9 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'keys' => 'string[]',
        'ids' => 'int[]',
        'objectIds' => 'int[]',
        'instanceCode' => 'string',
        'pagination' => '\GenericApi\Client\Model\PaginationRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'keys' => null,
        'ids' => 'int32',
        'objectIds' => 'int32',
        'instanceCode' => null,
        'pagination' => null
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
        'keys' => 'keys',
        'ids' => 'ids',
        'objectIds' => 'object_ids',
        'instanceCode' => 'instance_code',
        'pagination' => 'pagination'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keys' => 'setKeys',
        'ids' => 'setIds',
        'objectIds' => 'setObjectIds',
        'instanceCode' => 'setInstanceCode',
        'pagination' => 'setPagination'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keys' => 'getKeys',
        'ids' => 'getIds',
        'objectIds' => 'getObjectIds',
        'instanceCode' => 'getInstanceCode',
        'pagination' => 'getPagination'
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
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['objectIds'] = isset($data['objectIds']) ? $data['objectIds'] : null;
        $this->container['instanceCode'] = isset($data['instanceCode']) ? $data['instanceCode'] : null;
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['instanceCode'] === null) {
            $invalidProperties[] = "'instanceCode' can't be null";
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
     * Gets keys
     *
     * @return string[]|null
     */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
     * Sets keys
     *
     * @param string[]|null $keys keys
     *
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param int[]|null $ids ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets objectIds
     *
     * @return int[]|null
     */
    public function getObjectIds()
    {
        return $this->container['objectIds'];
    }

    /**
     * Sets objectIds
     *
     * @param int[]|null $objectIds objectIds
     *
     * @return $this
     */
    public function setObjectIds($objectIds)
    {
        $this->container['objectIds'] = $objectIds;

        return $this;
    }

    /**
     * Gets instanceCode
     *
     * @return string
     */
    public function getInstanceCode()
    {
        return $this->container['instanceCode'];
    }

    /**
     * Sets instanceCode
     *
     * @param string $instanceCode Уникальный алфавитно-цифровой идентификатор инстанса, которому принадлежит объект
     *
     * @return $this
     */
    public function setInstanceCode($instanceCode)
    {
        $this->container['instanceCode'] = $instanceCode;

        return $this;
    }

    /**
     * Gets pagination
     *
     * @return \GenericApi\Client\Model\PaginationRequest|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \GenericApi\Client\Model\PaginationRequest|null $pagination pagination
     *
     * @return $this
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

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


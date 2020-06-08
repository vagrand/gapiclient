<?php
/**
 * MetricValue
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
 * MetricValue Class Doc Comment
 *
 * @category Class
 * @package  GenericApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MetricValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MetricValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metricId' => 'int',
        'valueString' => 'string',
        'valueNumber' => 'float',
        'valueMin' => 'float',
        'valueMax' => 'float',
        'valueAvg' => 'float',
        'valueSum' => 'float',
        'createdTs' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'metricId' => 'int32',
        'valueString' => null,
        'valueNumber' => 'float',
        'valueMin' => 'float',
        'valueMax' => 'float',
        'valueAvg' => 'float',
        'valueSum' => 'float',
        'createdTs' => 'int32'
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
        'metricId' => 'metric_id',
        'valueString' => 'value_string',
        'valueNumber' => 'value_number',
        'valueMin' => 'value_min',
        'valueMax' => 'value_max',
        'valueAvg' => 'value_avg',
        'valueSum' => 'value_sum',
        'createdTs' => 'created_ts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metricId' => 'setMetricId',
        'valueString' => 'setValueString',
        'valueNumber' => 'setValueNumber',
        'valueMin' => 'setValueMin',
        'valueMax' => 'setValueMax',
        'valueAvg' => 'setValueAvg',
        'valueSum' => 'setValueSum',
        'createdTs' => 'setCreatedTs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metricId' => 'getMetricId',
        'valueString' => 'getValueString',
        'valueNumber' => 'getValueNumber',
        'valueMin' => 'getValueMin',
        'valueMax' => 'getValueMax',
        'valueAvg' => 'getValueAvg',
        'valueSum' => 'getValueSum',
        'createdTs' => 'getCreatedTs'
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
        $this->container['metricId'] = isset($data['metricId']) ? $data['metricId'] : null;
        $this->container['valueString'] = isset($data['valueString']) ? $data['valueString'] : null;
        $this->container['valueNumber'] = isset($data['valueNumber']) ? $data['valueNumber'] : null;
        $this->container['valueMin'] = isset($data['valueMin']) ? $data['valueMin'] : null;
        $this->container['valueMax'] = isset($data['valueMax']) ? $data['valueMax'] : null;
        $this->container['valueAvg'] = isset($data['valueAvg']) ? $data['valueAvg'] : null;
        $this->container['valueSum'] = isset($data['valueSum']) ? $data['valueSum'] : null;
        $this->container['createdTs'] = isset($data['createdTs']) ? $data['createdTs'] : null;
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
     * Gets metricId
     *
     * @return int|null
     */
    public function getMetricId()
    {
        return $this->container['metricId'];
    }

    /**
     * Sets metricId
     *
     * @param int|null $metricId metricId
     *
     * @return $this
     */
    public function setMetricId($metricId)
    {
        $this->container['metricId'] = $metricId;

        return $this;
    }

    /**
     * Gets valueString
     *
     * @return string|null
     */
    public function getValueString()
    {
        return $this->container['valueString'];
    }

    /**
     * Sets valueString
     *
     * @param string|null $valueString Значение метрики такое, каким оно было получено из источника
     *
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->container['valueString'] = $valueString;

        return $this;
    }

    /**
     * Gets valueNumber
     *
     * @return float|null
     */
    public function getValueNumber()
    {
        return $this->container['valueNumber'];
    }

    /**
     * Sets valueNumber
     *
     * @param float|null $valueNumber Значение, полученное из источника и приведенное к типу float. Будет равен value_avg, если в запросе указан параметр group_div
     *
     * @return $this
     */
    public function setValueNumber($valueNumber)
    {
        $this->container['valueNumber'] = $valueNumber;

        return $this;
    }

    /**
     * Gets valueMin
     *
     * @return float|null
     */
    public function getValueMin()
    {
        return $this->container['valueMin'];
    }

    /**
     * Sets valueMin
     *
     * @param float|null $valueMin Будет равен value_number, если в запросе не указан параметр group_div
     *
     * @return $this
     */
    public function setValueMin($valueMin)
    {
        $this->container['valueMin'] = $valueMin;

        return $this;
    }

    /**
     * Gets valueMax
     *
     * @return float|null
     */
    public function getValueMax()
    {
        return $this->container['valueMax'];
    }

    /**
     * Sets valueMax
     *
     * @param float|null $valueMax Будет равен value_number, если в запросе не указан параметр group_div
     *
     * @return $this
     */
    public function setValueMax($valueMax)
    {
        $this->container['valueMax'] = $valueMax;

        return $this;
    }

    /**
     * Gets valueAvg
     *
     * @return float|null
     */
    public function getValueAvg()
    {
        return $this->container['valueAvg'];
    }

    /**
     * Sets valueAvg
     *
     * @param float|null $valueAvg Будет равен value_number, если в запросе не указан параметр group_div
     *
     * @return $this
     */
    public function setValueAvg($valueAvg)
    {
        $this->container['valueAvg'] = $valueAvg;

        return $this;
    }

    /**
     * Gets valueSum
     *
     * @return float|null
     */
    public function getValueSum()
    {
        return $this->container['valueSum'];
    }

    /**
     * Sets valueSum
     *
     * @param float|null $valueSum Будет равен value_number, если в запросе не указан параметр group_div
     *
     * @return $this
     */
    public function setValueSum($valueSum)
    {
        $this->container['valueSum'] = $valueSum;

        return $this;
    }

    /**
     * Gets createdTs
     *
     * @return int|null
     */
    public function getCreatedTs()
    {
        return $this->container['createdTs'];
    }

    /**
     * Sets createdTs
     *
     * @param int|null $createdTs createdTs
     *
     * @return $this
     */
    public function setCreatedTs($createdTs)
    {
        $this->container['createdTs'] = $createdTs;

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


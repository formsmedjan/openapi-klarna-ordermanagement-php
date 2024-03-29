<?php
/**
 * CaptureObject
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FormsmedjanKlarnaOrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Order Managment API
 *
 * API to handle order lifecycle
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FormsmedjanKlarnaOrderManagement\Model;

use \ArrayAccess;
use \FormsmedjanKlarnaOrderManagement\ObjectSerializer;

/**
 * CaptureObject Class Doc Comment
 *
 * @category Class
 * @package  FormsmedjanKlarnaOrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CaptureObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CaptureObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'captured_amount' => 'int',
        'description' => 'string',
        'reference' => 'string',
        'order_lines' => '\FormsmedjanKlarnaOrderManagement\Model\OrderLine[]',
        'shipping_info' => '\FormsmedjanKlarnaOrderManagement\Model\ShippingInfo[]',
        'shipping_delay' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'captured_amount' => 'int64',
        'description' => null,
        'reference' => null,
        'order_lines' => null,
        'shipping_info' => null,
        'shipping_delay' => 'int64'
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
        'captured_amount' => 'captured_amount',
        'description' => 'description',
        'reference' => 'reference',
        'order_lines' => 'order_lines',
        'shipping_info' => 'shipping_info',
        'shipping_delay' => 'shipping_delay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'captured_amount' => 'setCapturedAmount',
        'description' => 'setDescription',
        'reference' => 'setReference',
        'order_lines' => 'setOrderLines',
        'shipping_info' => 'setShippingInfo',
        'shipping_delay' => 'setShippingDelay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'captured_amount' => 'getCapturedAmount',
        'description' => 'getDescription',
        'reference' => 'getReference',
        'order_lines' => 'getOrderLines',
        'shipping_info' => 'getShippingInfo',
        'shipping_delay' => 'getShippingDelay'
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
        $this->container['captured_amount'] = $data['captured_amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['order_lines'] = $data['order_lines'] ?? null;
        $this->container['shipping_info'] = $data['shipping_info'] ?? null;
        $this->container['shipping_delay'] = $data['shipping_delay'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['captured_amount'] === null) {
            $invalidProperties[] = "'captured_amount' can't be null";
        }
        if (($this->container['captured_amount'] > 100000000)) {
            $invalidProperties[] = "invalid value for 'captured_amount', must be smaller than or equal to 100000000.";
        }

        if (($this->container['captured_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'captured_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['order_lines']) && (count($this->container['order_lines']) > 1000)) {
            $invalidProperties[] = "invalid value for 'order_lines', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['order_lines']) && (count($this->container['order_lines']) < 0)) {
            $invalidProperties[] = "invalid value for 'order_lines', number of items must be greater than or equal to 0.";
        }

        if (!is_null($this->container['shipping_info']) && (count($this->container['shipping_info']) > 500)) {
            $invalidProperties[] = "invalid value for 'shipping_info', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['shipping_info']) && (count($this->container['shipping_info']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipping_info', number of items must be greater than or equal to 0.";
        }

        if (!is_null($this->container['shipping_delay']) && ($this->container['shipping_delay'] < 0)) {
            $invalidProperties[] = "invalid value for 'shipping_delay', must be bigger than or equal to 0.";
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
     * Gets captured_amount
     *
     * @return int
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     *
     * @param int $captured_amount The captured amount in minor units.
     *
     * @return self
     */
    public function setCapturedAmount($captured_amount)
    {

        if (($captured_amount > 100000000)) {
            throw new \InvalidArgumentException('invalid value for $captured_amount when calling CaptureObject., must be smaller than or equal to 100000000.');
        }
        if (($captured_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $captured_amount when calling CaptureObject., must be bigger than or equal to 0.');
        }

        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the capture shown to the customer. Maximum 255 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CaptureObject., must be smaller than or equal to 255.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CaptureObject., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Internal reference to the capture. This will be included in the settlement files. Max length is 255 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling CaptureObject., must be smaller than or equal to 255.');
        }
        if (!is_null($reference) && (mb_strlen($reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling CaptureObject., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \FormsmedjanKlarnaOrderManagement\Model\OrderLine[]|null
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \FormsmedjanKlarnaOrderManagement\Model\OrderLine[]|null $order_lines Order lines for this capture. Maximum 1000 items.
     *
     * @return self
     */
    public function setOrderLines($order_lines)
    {

        if (!is_null($order_lines) && (count($order_lines) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $order_lines when calling CaptureObject., number of items must be less than or equal to 1000.');
        }
        if (!is_null($order_lines) && (count($order_lines) < 0)) {
            throw new \InvalidArgumentException('invalid length for $order_lines when calling CaptureObject., number of items must be greater than or equal to 0.');
        }
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets shipping_info
     *
     * @return \FormsmedjanKlarnaOrderManagement\Model\ShippingInfo[]|null
     */
    public function getShippingInfo()
    {
        return $this->container['shipping_info'];
    }

    /**
     * Sets shipping_info
     *
     * @param \FormsmedjanKlarnaOrderManagement\Model\ShippingInfo[]|null $shipping_info Shipping information for this capture. Maximum 500 items.
     *
     * @return self
     */
    public function setShippingInfo($shipping_info)
    {

        if (!is_null($shipping_info) && (count($shipping_info) > 500)) {
            throw new \InvalidArgumentException('invalid value for $shipping_info when calling CaptureObject., number of items must be less than or equal to 500.');
        }
        if (!is_null($shipping_info) && (count($shipping_info) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shipping_info when calling CaptureObject., number of items must be greater than or equal to 0.');
        }
        $this->container['shipping_info'] = $shipping_info;

        return $this;
    }

    /**
     * Gets shipping_delay
     *
     * @return int|null
     */
    public function getShippingDelay()
    {
        return $this->container['shipping_delay'];
    }

    /**
     * Sets shipping_delay
     *
     * @param int|null $shipping_delay Delay before the order will be shipped. Use for improving the customer experience regarding payments. This field is currently not returned when reading the order. Minimum: 0. Please note: to be able to submit values larger than 0, this has to be enabled in your merchant account. Please contact Klarna for further information.
     *
     * @return self
     */
    public function setShippingDelay($shipping_delay)
    {

        if (!is_null($shipping_delay) && ($shipping_delay < 0)) {
            throw new \InvalidArgumentException('invalid value for $shipping_delay when calling CaptureObject., must be bigger than or equal to 0.');
        }

        $this->container['shipping_delay'] = $shipping_delay;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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



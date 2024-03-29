<?php
/**
 * Capture
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
 * Capture Class Doc Comment
 *
 * @category Class
 * @package  FormsmedjanKlarnaOrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Capture implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Capture';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capture_id' => 'string',
        'reference' => 'string',
        'klarna_reference' => 'string',
        'captured_amount' => 'int',
        'captured_at' => '\DateTime',
        'description' => 'string',
        'order_lines' => '\FormsmedjanKlarnaOrderManagement\Model\OrderLine[]',
        'refunded_amount' => 'int',
        'billing_address' => '\FormsmedjanKlarnaOrderManagement\Model\Address',
        'shipping_address' => '\FormsmedjanKlarnaOrderManagement\Model\Address',
        'shipping_info' => '\FormsmedjanKlarnaOrderManagement\Model\ShippingInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'capture_id' => null,
        'reference' => null,
        'klarna_reference' => null,
        'captured_amount' => 'int64',
        'captured_at' => 'date-time',
        'description' => null,
        'order_lines' => null,
        'refunded_amount' => 'int64',
        'billing_address' => null,
        'shipping_address' => null,
        'shipping_info' => null
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
        'capture_id' => 'capture_id',
        'reference' => 'reference',
        'klarna_reference' => 'klarna_reference',
        'captured_amount' => 'captured_amount',
        'captured_at' => 'captured_at',
        'description' => 'description',
        'order_lines' => 'order_lines',
        'refunded_amount' => 'refunded_amount',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'shipping_info' => 'shipping_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capture_id' => 'setCaptureId',
        'reference' => 'setReference',
        'klarna_reference' => 'setKlarnaReference',
        'captured_amount' => 'setCapturedAmount',
        'captured_at' => 'setCapturedAt',
        'description' => 'setDescription',
        'order_lines' => 'setOrderLines',
        'refunded_amount' => 'setRefundedAmount',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'shipping_info' => 'setShippingInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capture_id' => 'getCaptureId',
        'reference' => 'getReference',
        'klarna_reference' => 'getKlarnaReference',
        'captured_amount' => 'getCapturedAmount',
        'captured_at' => 'getCapturedAt',
        'description' => 'getDescription',
        'order_lines' => 'getOrderLines',
        'refunded_amount' => 'getRefundedAmount',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'shipping_info' => 'getShippingInfo'
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
        $this->container['capture_id'] = $data['capture_id'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['klarna_reference'] = $data['klarna_reference'] ?? null;
        $this->container['captured_amount'] = $data['captured_amount'] ?? null;
        $this->container['captured_at'] = $data['captured_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['order_lines'] = $data['order_lines'] ?? null;
        $this->container['refunded_amount'] = $data['refunded_amount'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['shipping_info'] = $data['shipping_info'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['captured_amount']) && ($this->container['captured_amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'captured_amount', must be bigger than or equal to 1.";
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
     * Gets capture_id
     *
     * @return string|null
     */
    public function getCaptureId()
    {
        return $this->container['capture_id'];
    }

    /**
     * Sets capture_id
     *
     * @param string|null $capture_id The capture id. Generated when the capture is created.
     *
     * @return self
     */
    public function setCaptureId($capture_id)
    {
        $this->container['capture_id'] = $capture_id;

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
     * @param string|null $reference Internal reference to the capture which will be included in the settlement files. Max length is 255 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Capture., must be smaller than or equal to 255.');
        }
        if (!is_null($reference) && (mb_strlen($reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Capture., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets klarna_reference
     *
     * @return string|null
     */
    public function getKlarnaReference()
    {
        return $this->container['klarna_reference'];
    }

    /**
     * Sets klarna_reference
     *
     * @param string|null $klarna_reference Customer friendly reference id, used as a reference when communicating with the customer.
     *
     * @return self
     */
    public function setKlarnaReference($klarna_reference)
    {
        $this->container['klarna_reference'] = $klarna_reference;

        return $this;
    }

    /**
     * Gets captured_amount
     *
     * @return int|null
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     *
     * @param int|null $captured_amount The captured amount in minor units.
     *
     * @return self
     */
    public function setCapturedAmount($captured_amount)
    {

        if (!is_null($captured_amount) && ($captured_amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $captured_amount when calling Capture., must be bigger than or equal to 1.');
        }

        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets captured_at
     *
     * @return \DateTime|null
     */
    public function getCapturedAt()
    {
        return $this->container['captured_at'];
    }

    /**
     * Sets captured_at
     *
     * @param \DateTime|null $captured_at The time of the capture. Specified in ISO 8601.
     *
     * @return self
     */
    public function setCapturedAt($captured_at)
    {
        $this->container['captured_at'] = $captured_at;

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
     * @param string|null $description Description of the capture shown to the customer.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param \FormsmedjanKlarnaOrderManagement\Model\OrderLine[]|null $order_lines List of order lines for the capture shown to the customer.
     *
     * @return self
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int|null $refunded_amount Refunded amount for this capture in minor units.
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \FormsmedjanKlarnaOrderManagement\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \FormsmedjanKlarnaOrderManagement\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \FormsmedjanKlarnaOrderManagement\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \FormsmedjanKlarnaOrderManagement\Model\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

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
     * @param \FormsmedjanKlarnaOrderManagement\Model\ShippingInfo[]|null $shipping_info Shipping information for this capture.
     *
     * @return self
     */
    public function setShippingInfo($shipping_info)
    {
        $this->container['shipping_info'] = $shipping_info;

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



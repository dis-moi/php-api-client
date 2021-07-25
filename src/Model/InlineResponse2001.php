<?php

declare(strict_types=1);

/**
 * DisMoi OpenAPI.
 *
 * OpenAPI documentation and _sandbox_ for **DisMoi** (_Tell Me_ in french), a FLOSS web annotations project to turn the tide of the opinion wars back in favor of the internauts.  - [Official Website](https://www.dismoi.io/) - [Source Code](https://github.com/dis-moi) - [Report Issues](https://github.com/dis-moi/backend/issues) (_please!_)
 *
 * The version of the OpenAPI document: 4.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 *
 * This class is auto generated, do not edit manually.
 */

namespace DisMoi\Client\Model;

use ArrayAccess;
use DisMoi\Client\ObjectSerializer;

/**
 * InlineResponse2001 Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2001 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'inline_response_200_1';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'hydra:member' => '\DisMoi\Client\Model\NoticeJsonldRead[]',
        'hydra:totalItems' => 'int',
        'hydra:view' => '\DisMoi\Client\Model\InlineResponse200HydraView',
        'hydra:search' => '\DisMoi\Client\Model\InlineResponse200HydraSearch',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'hydra:member' => null, 'hydra:totalItems' => null, 'hydra:view' => null, 'hydra:search' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'member' => 'hydra:member',
        'totalItems' => 'hydra:totalItems',
        'view' => 'hydra:view',
        'search' => 'hydra:search',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'hydra:member' => 'setMember',
        'hydra:totalItems' => 'setTotalItems',
        'hydra:view' => 'setView',
        'hydra:search' => 'setSearch',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'hydra:member' => 'getMember',
        'hydra:totalItems' => 'getTotalItems',
        'hydra:view' => 'getView',
        'hydra:search' => 'getSearch',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['member'] = $data[self::$attributeMap['member']] ?? null;
        $this->container['totalItems'] = $data[self::$attributeMap['totalItems']] ?? null;
        $this->container['view'] = $data[self::$attributeMap['view']] ?? null;
        $this->container['search'] = $data[self::$attributeMap['search']] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['member']) {
            $invalidProperties[] = "'member' can't be null";
        }
        if (null !== $this->container['totalItems'] && ($this->container['totalItems'] < 0)) {
            $invalidProperties[] = "invalid value for 'totalItems', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === \count($this->listInvalidProperties());
    }

    /**
     * Gets member.
     *
     * @return \DisMoi\Client\Model\NoticeJsonldRead[]
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member.
     *
     * @param \DisMoi\Client\Model\NoticeJsonldRead[] $member member
     *
     * @return self
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets totalItems.
     *
     * @return int|null
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems.
     *
     * @param int|null $totalItems totalItems
     *
     * @return self
     */
    public function setTotalItems($totalItems)
    {
        if (null !== $totalItems && ($totalItems < 0)) {
            throw new \InvalidArgumentException('invalid value for $totalItems when calling InlineResponse2001., must be bigger than or equal to 0.');
        }

        $this->container['totalItems'] = $totalItems;

        return $this;
    }

    /**
     * Gets view.
     *
     * @return \DisMoi\Client\Model\InlineResponse200HydraView|null
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view.
     *
     * @param \DisMoi\Client\Model\InlineResponse200HydraView|null $view view
     *
     * @return self
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets search.
     *
     * @return \DisMoi\Client\Model\InlineResponse200HydraSearch|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search.
     *
     * @param \DisMoi\Client\Model\InlineResponse200HydraSearch|null $search search
     *
     * @return self
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            \JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

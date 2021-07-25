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
 * NoticeCreate Class Doc Comment.
 *
 * @category Class
 * @description A Notice holds a message written/contributed by a Contributor about a web page or a set of web pages selected by the matching contexts.
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NoticeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Notice-create';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'visibility' => 'string',
        'matchingContexts' => '\DisMoi\Client\Model\MatchingContextCreate[]',
        'contributor' => 'string',
        'message' => 'string',
        'expires' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'visibility' => null, 'matchingContexts' => null, 'contributor' => 'iri-reference', 'message' => null, 'expires' => 'date-time',
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
        'visibility' => 'visibility',
        'matchingContexts' => 'matchingContexts',
        'contributor' => 'contributor',
        'message' => 'message',
        'expires' => 'expires',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'visibility' => 'setVisibility',
        'matchingContexts' => 'setMatchingContexts',
        'contributor' => 'setContributor',
        'message' => 'setMessage',
        'expires' => 'setExpires',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'visibility' => 'getVisibility',
        'matchingContexts' => 'getMatchingContexts',
        'contributor' => 'getContributor',
        'message' => 'getMessage',
        'expires' => 'getExpires',
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
        $this->container['visibility'] = $data[self::$attributeMap['visibility']] ?? 'private';
        $this->container['matchingContexts'] = $data[self::$attributeMap['matchingContexts']] ?? null;
        $this->container['contributor'] = $data[self::$attributeMap['contributor']] ?? null;
        $this->container['message'] = $data[self::$attributeMap['message']] ?? null;
        $this->container['expires'] = $data[self::$attributeMap['expires']] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * Gets visibility.
     *
     * @return string|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility.
     *
     * @param string|null $visibility The visibility of the Notice.  See `NoticeVisibility` for an enumeration of the allowed values:   - \"public\": anyone may view this Notice   - \"private\": Notice is only visible to Contributor   - \"archived\": A deleted notice because it wasn't relevant anymore   - \"draft\": Notice is only visible to Contributor, pending publication   - \"question\": A question asked by a someone on a webpage.  A question is not publicly visible.
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets matchingContexts.
     *
     * @return \DisMoi\Client\Model\MatchingContextCreate[]|null
     */
    public function getMatchingContexts()
    {
        return $this->container['matchingContexts'];
    }

    /**
     * Sets matchingContexts.
     *
     * @param \DisMoi\Client\Model\MatchingContextCreate[]|null $matchingContexts matchingContexts
     *
     * @return self
     */
    public function setMatchingContexts($matchingContexts)
    {
        $this->container['matchingContexts'] = $matchingContexts;

        return $this;
    }

    /**
     * Gets contributor.
     *
     * @return string|null
     */
    public function getContributor()
    {
        return $this->container['contributor'];
    }

    /**
     * Sets contributor.
     *
     * @param string|null $contributor the Contributor who submitted the Notice
     *
     * @return self
     */
    public function setContributor($contributor)
    {
        $this->container['contributor'] = $contributor;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message.
     *
     * @param string|null $message The raw message attached to the Notice, as given by the Contributor.  It is unsafe to read from it, prefer reading from `strippedMessage`.
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets expires.
     *
     * @return \DateTime|null
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires.
     *
     * @param \DateTime|null $expires expiration date of the notice, in the ISO8601 format
     *
     * @return self
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

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

<?php
/**
 * Group
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Group Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Group implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'group_id' => '?string',
        'group_name' => '?string',
        'group_type' => '?string',
        'permission_profile_id' => '?string',
        'users' => '\DocuSign\eSign\Model\UserInfo[]',
        'users_count' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_details' => null,
        'group_id' => null,
        'group_name' => null,
        'group_type' => null,
        'permission_profile_id' => null,
        'users' => null,
        'users_count' => null
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
        'error_details' => 'errorDetails',
        'group_id' => 'groupId',
        'group_name' => 'groupName',
        'group_type' => 'groupType',
        'permission_profile_id' => 'permissionProfileId',
        'users' => 'users',
        'users_count' => 'usersCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_details' => 'setErrorDetails',
        'group_id' => 'setGroupId',
        'group_name' => 'setGroupName',
        'group_type' => 'setGroupType',
        'permission_profile_id' => 'setPermissionProfileId',
        'users' => 'setUsers',
        'users_count' => 'setUsersCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_details' => 'getErrorDetails',
        'group_id' => 'getGroupId',
        'group_name' => 'getGroupName',
        'group_type' => 'getGroupType',
        'permission_profile_id' => 'getPermissionProfileId',
        'users' => 'getUsers',
        'users_count' => 'getUsersCount'
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
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['group_type'] = isset($data['group_type']) ? $data['group_type'] : null;
        $this->container['permission_profile_id'] = isset($data['permission_profile_id']) ? $data['permission_profile_id'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['users_count'] = isset($data['users_count']) ? $data['users_count'] : null;
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
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return ?string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param ?string $group_id The DocuSign group ID for the group.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return ?string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param ?string $group_name The name of the group.
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets group_type
     *
     * @return ?string
     */
    public function getGroupType()
    {
        return $this->container['group_type'];
    }

    /**
     * Sets group_type
     *
     * @param ?string $group_type The group type.
     *
     * @return $this
     */
    public function setGroupType($group_type)
    {
        $this->container['group_type'] = $group_type;

        return $this;
    }

    /**
     * Gets permission_profile_id
     *
     * @return ?string
     */
    public function getPermissionProfileId()
    {
        return $this->container['permission_profile_id'];
    }

    /**
     * Sets permission_profile_id
     *
     * @param ?string $permission_profile_id The ID of the permission profile associated with the group.
     *
     * @return $this
     */
    public function setPermissionProfileId($permission_profile_id)
    {
        $this->container['permission_profile_id'] = $permission_profile_id;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \DocuSign\eSign\Model\UserInfo[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \DocuSign\eSign\Model\UserInfo[] $users 
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets users_count
     *
     * @return ?string
     */
    public function getUsersCount()
    {
        return $this->container['users_count'];
    }

    /**
     * Sets users_count
     *
     * @param ?string $users_count 
     *
     * @return $this
     */
    public function setUsersCount($users_count)
    {
        $this->container['users_count'] = $users_count;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


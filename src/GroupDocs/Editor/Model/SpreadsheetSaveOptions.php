<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SpreadsheetSaveOptions.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Editor\Model;
use \GroupDocs\Editor\ObjectSerializer;

/*
 * SpreadsheetSaveOptions
 *
 * @description Allows to specify custom options for generating and saving Spreadsheet (Excel-compliant) documents
 */
class SpreadsheetSaveOptions extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SpreadsheetSaveOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'password' => 'string',
        'protectionType' => 'string',
        'protectionPassword' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'password' => null,
        'protectionType' => null,
        'protectionPassword' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'password' => 'Password',
        'protectionType' => 'ProtectionType',
        'protectionPassword' => 'ProtectionPassword'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password' => 'setPassword',
        'protectionType' => 'setProtectionType',
        'protectionPassword' => 'setProtectionPassword'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password' => 'getPassword',
        'protectionType' => 'getProtectionType',
        'protectionPassword' => 'getProtectionPassword'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const PROTECTION_TYPE_NONE = 'None';
    const PROTECTION_TYPE_ALL = 'All';
    const PROTECTION_TYPE_CONTENTS = 'Contents';
    const PROTECTION_TYPE_OBJECTS = 'Objects';
    const PROTECTION_TYPE_SCENARIOS = 'Scenarios';
    const PROTECTION_TYPE_STRUCTURE = 'Structure';
    const PROTECTION_TYPE_WINDOW = 'Window';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtectionTypeAllowableValues()
    {
        return [
            self::PROTECTION_TYPE_NONE,
            self::PROTECTION_TYPE_ALL,
            self::PROTECTION_TYPE_CONTENTS,
            self::PROTECTION_TYPE_OBJECTS,
            self::PROTECTION_TYPE_SCENARIOS,
            self::PROTECTION_TYPE_STRUCTURE,
            self::PROTECTION_TYPE_WINDOW,
        ];
    }
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['protectionType'] = isset($data['protectionType']) ? $data['protectionType'] : null;
        $this->container['protectionPassword'] = isset($data['protectionPassword']) ? $data['protectionPassword'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['protectionType'] === null) {
            $invalidProperties[] = "'protectionType' can't be null";
        }
        $allowedValues = $this->getProtectionTypeAllowableValues();
        if (!in_array($this->container['protectionType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'protectionType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['protectionType'] === null) {
            return false;
        }
        $allowedValues = $this->getProtectionTypeAllowableValues();
        if (!in_array($this->container['protectionType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password Allows to specify document password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets protectionType
     *
     * @return string
     */
    public function getProtectionType()
    {
        return $this->container['protectionType'];
    }

    /*
     * Sets protectionType
     *
     * @param string $protectionType Write-protection type. Default value is None.
     *
     * @return $this
     */
    public function setProtectionType($protectionType)
    {
        $allowedValues = $this->getProtectionTypeAllowableValues();
        if ((!is_numeric($protectionType) && !in_array($protectionType, $allowedValues)) || (is_numeric($protectionType) && !in_array($allowedValues[$protectionType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'protectionType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['protectionType'] = $protectionType;

        return $this;
    }

    /*
     * Gets protectionPassword
     *
     * @return string
     */
    public function getProtectionPassword()
    {
        return $this->container['protectionPassword'];
    }

    /*
     * Sets protectionPassword
     *
     * @param string $protectionPassword Write-protection password. Used when protection type is specified.
     *
     * @return $this
     */
    public function setProtectionPassword($protectionPassword)
    {
        $this->container['protectionPassword'] = $protectionPassword;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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



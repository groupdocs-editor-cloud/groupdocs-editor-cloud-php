<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordProcessingSaveOptions.php">
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
 * WordProcessingSaveOptions
 *
 * @description Allows to specify custom options for generating and saving WordProcessing-compliant documents
 */
class WordProcessingSaveOptions extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordProcessingSaveOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'password' => 'string',
        'enablePagination' => 'bool',
        'locale' => 'string',
        'localeBi' => 'string',
        'localeFarEast' => 'string',
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
        'enablePagination' => null,
        'locale' => null,
        'localeBi' => null,
        'localeFarEast' => null,
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
        'enablePagination' => 'EnablePagination',
        'locale' => 'Locale',
        'localeBi' => 'LocaleBi',
        'localeFarEast' => 'LocaleFarEast',
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
        'enablePagination' => 'setEnablePagination',
        'locale' => 'setLocale',
        'localeBi' => 'setLocaleBi',
        'localeFarEast' => 'setLocaleFarEast',
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
        'enablePagination' => 'getEnablePagination',
        'locale' => 'getLocale',
        'localeBi' => 'getLocaleBi',
        'localeFarEast' => 'getLocaleFarEast',
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

    const PROTECTION_TYPE_NO_PROTECTION = 'NoProtection';
    const PROTECTION_TYPE_ALLOW_ONLY_REVISIONS = 'AllowOnlyRevisions';
    const PROTECTION_TYPE_ALLOW_ONLY_COMMENTS = 'AllowOnlyComments';
    const PROTECTION_TYPE_ALLOW_ONLY_FORM_FIELDS = 'AllowOnlyFormFields';
    const PROTECTION_TYPE_READ_ONLY = 'ReadOnly';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtectionTypeAllowableValues()
    {
        return [
            self::PROTECTION_TYPE_NO_PROTECTION,
            self::PROTECTION_TYPE_ALLOW_ONLY_REVISIONS,
            self::PROTECTION_TYPE_ALLOW_ONLY_COMMENTS,
            self::PROTECTION_TYPE_ALLOW_ONLY_FORM_FIELDS,
            self::PROTECTION_TYPE_READ_ONLY,
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
        $this->container['enablePagination'] = isset($data['enablePagination']) ? $data['enablePagination'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['localeBi'] = isset($data['localeBi']) ? $data['localeBi'] : null;
        $this->container['localeFarEast'] = isset($data['localeFarEast']) ? $data['localeFarEast'] : null;
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

        if ($this->container['enablePagination'] === null) {
            $invalidProperties[] = "'enablePagination' can't be null";
        }
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

        if ($this->container['enablePagination'] === null) {
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
     * Gets enablePagination
     *
     * @return bool
     */
    public function getEnablePagination()
    {
        return $this->container['enablePagination'];
    }

    /*
     * Sets enablePagination
     *
     * @param bool $enablePagination Allows to enable or disable pagination which will be used for saving the document. If the original document was opened and edited in pagination mode, this option also should be enabled. By default is disabled.
     *
     * @return $this
     */
    public function setEnablePagination($enablePagination)
    {
        $this->container['enablePagination'] = $enablePagination;

        return $this;
    }

    /*
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /*
     * Sets locale
     *
     * @param string $locale Allows to set override default locale (language) for the WordProcessing document, which will be applied during its creation. When is not specified (default value), MS Word (or other program) will detect (or choose) the document locale according to its own settings or other factors.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /*
     * Gets localeBi
     *
     * @return string
     */
    public function getLocaleBi()
    {
        return $this->container['localeBi'];
    }

    /*
     * Sets localeBi
     *
     * @param string $localeBi Allows to set override locale (language) for the WordProcessing document for the RTL (right-to-left) text, which will be applied during its creation. When is not specified (default value), MS Word (or other program) will detect (or choose) the document RTL locale according to its own settings or other factors.
     *
     * @return $this
     */
    public function setLocaleBi($localeBi)
    {
        $this->container['localeBi'] = $localeBi;

        return $this;
    }

    /*
     * Gets localeFarEast
     *
     * @return string
     */
    public function getLocaleFarEast()
    {
        return $this->container['localeFarEast'];
    }

    /*
     * Sets localeFarEast
     *
     * @param string $localeFarEast Allows to override the locale (language) for the WordProcessing document for the East-Asian text, which will be applied during its creation. When is not specified (default value), MS Word (or other program) will detect (or choose) the document East-Asian locale according to its own settings or other factors.
     *
     * @return $this
     */
    public function setLocaleFarEast($localeFarEast)
    {
        $this->container['localeFarEast'] = $localeFarEast;

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
     * @param string $protectionType Write-protection type. Default value is NoProtection
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



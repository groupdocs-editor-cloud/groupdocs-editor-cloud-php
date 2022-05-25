<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="XmlLoadOptions.php">
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
 * XmlLoadOptions
 *
 * @description Allows to specify custom options for loading XML (eXtensible Markup Language) documents
 */
class XmlLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "XmlLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'encoding' => 'string',
        'fixIncorrectStructure' => 'bool',
        'recognizeUris' => 'bool',
        'recognizeEmails' => 'bool',
        'trimTrailingWhitespaces' => 'bool',
        'attributeValuesQuoteType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'encoding' => null,
        'fixIncorrectStructure' => null,
        'recognizeUris' => null,
        'recognizeEmails' => null,
        'trimTrailingWhitespaces' => null,
        'attributeValuesQuoteType' => null
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
        'encoding' => 'Encoding',
        'fixIncorrectStructure' => 'FixIncorrectStructure',
        'recognizeUris' => 'RecognizeUris',
        'recognizeEmails' => 'RecognizeEmails',
        'trimTrailingWhitespaces' => 'TrimTrailingWhitespaces',
        'attributeValuesQuoteType' => 'AttributeValuesQuoteType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encoding' => 'setEncoding',
        'fixIncorrectStructure' => 'setFixIncorrectStructure',
        'recognizeUris' => 'setRecognizeUris',
        'recognizeEmails' => 'setRecognizeEmails',
        'trimTrailingWhitespaces' => 'setTrimTrailingWhitespaces',
        'attributeValuesQuoteType' => 'setAttributeValuesQuoteType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encoding' => 'getEncoding',
        'fixIncorrectStructure' => 'getFixIncorrectStructure',
        'recognizeUris' => 'getRecognizeUris',
        'recognizeEmails' => 'getRecognizeEmails',
        'trimTrailingWhitespaces' => 'getTrimTrailingWhitespaces',
        'attributeValuesQuoteType' => 'getAttributeValuesQuoteType'
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

    const ATTRIBUTE_VALUES_QUOTE_TYPE_DOUBLE_QUOTE = 'DoubleQuote';
    const ATTRIBUTE_VALUES_QUOTE_TYPE_SINGLE_QUOTE = 'SingleQuote';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAttributeValuesQuoteTypeAllowableValues()
    {
        return [
            self::ATTRIBUTE_VALUES_QUOTE_TYPE_DOUBLE_QUOTE,
            self::ATTRIBUTE_VALUES_QUOTE_TYPE_SINGLE_QUOTE,
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

        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['fixIncorrectStructure'] = isset($data['fixIncorrectStructure']) ? $data['fixIncorrectStructure'] : null;
        $this->container['recognizeUris'] = isset($data['recognizeUris']) ? $data['recognizeUris'] : null;
        $this->container['recognizeEmails'] = isset($data['recognizeEmails']) ? $data['recognizeEmails'] : null;
        $this->container['trimTrailingWhitespaces'] = isset($data['trimTrailingWhitespaces']) ? $data['trimTrailingWhitespaces'] : null;
        $this->container['attributeValuesQuoteType'] = isset($data['attributeValuesQuoteType']) ? $data['attributeValuesQuoteType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['fixIncorrectStructure'] === null) {
            $invalidProperties[] = "'fixIncorrectStructure' can't be null";
        }
        if ($this->container['recognizeUris'] === null) {
            $invalidProperties[] = "'recognizeUris' can't be null";
        }
        if ($this->container['recognizeEmails'] === null) {
            $invalidProperties[] = "'recognizeEmails' can't be null";
        }
        if ($this->container['trimTrailingWhitespaces'] === null) {
            $invalidProperties[] = "'trimTrailingWhitespaces' can't be null";
        }
        if ($this->container['attributeValuesQuoteType'] === null) {
            $invalidProperties[] = "'attributeValuesQuoteType' can't be null";
        }
        $allowedValues = $this->getAttributeValuesQuoteTypeAllowableValues();
        if (!in_array($this->container['attributeValuesQuoteType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'attributeValuesQuoteType', must be one of '%s'",
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

        if ($this->container['fixIncorrectStructure'] === null) {
            return false;
        }
        if ($this->container['recognizeUris'] === null) {
            return false;
        }
        if ($this->container['recognizeEmails'] === null) {
            return false;
        }
        if ($this->container['trimTrailingWhitespaces'] === null) {
            return false;
        }
        if ($this->container['attributeValuesQuoteType'] === null) {
            return false;
        }
        $allowedValues = $this->getAttributeValuesQuoteTypeAllowableValues();
        if (!in_array($this->container['attributeValuesQuoteType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /*
     * Sets encoding
     *
     * @param string $encoding Character encoding of the text document, which will be applied for its opening. By default is null - internal document encoding will be applied.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /*
     * Gets fixIncorrectStructure
     *
     * @return bool
     */
    public function getFixIncorrectStructure()
    {
        return $this->container['fixIncorrectStructure'];
    }

    /*
     * Sets fixIncorrectStructure
     *
     * @param bool $fixIncorrectStructure Allows to enable or disable mechanism for fixing corrupted XML structure. By default is disabled (false).
     *
     * @return $this
     */
    public function setFixIncorrectStructure($fixIncorrectStructure)
    {
        $this->container['fixIncorrectStructure'] = $fixIncorrectStructure;

        return $this;
    }

    /*
     * Gets recognizeUris
     *
     * @return bool
     */
    public function getRecognizeUris()
    {
        return $this->container['recognizeUris'];
    }

    /*
     * Sets recognizeUris
     *
     * @param bool $recognizeUris Allows to enable URI recognition algorithm
     *
     * @return $this
     */
    public function setRecognizeUris($recognizeUris)
    {
        $this->container['recognizeUris'] = $recognizeUris;

        return $this;
    }

    /*
     * Gets recognizeEmails
     *
     * @return bool
     */
    public function getRecognizeEmails()
    {
        return $this->container['recognizeEmails'];
    }

    /*
     * Sets recognizeEmails
     *
     * @param bool $recognizeEmails Allows to enable recognition algorithm for email addresses in attribute values
     *
     * @return $this
     */
    public function setRecognizeEmails($recognizeEmails)
    {
        $this->container['recognizeEmails'] = $recognizeEmails;

        return $this;
    }

    /*
     * Gets trimTrailingWhitespaces
     *
     * @return bool
     */
    public function getTrimTrailingWhitespaces()
    {
        return $this->container['trimTrailingWhitespaces'];
    }

    /*
     * Sets trimTrailingWhitespaces
     *
     * @param bool $trimTrailingWhitespaces Allows to enable the truncation of trailing whitespaces in the inner-tag text. By default is disabled (false) - trailing whitespaces will be preserved.
     *
     * @return $this
     */
    public function setTrimTrailingWhitespaces($trimTrailingWhitespaces)
    {
        $this->container['trimTrailingWhitespaces'] = $trimTrailingWhitespaces;

        return $this;
    }

    /*
     * Gets attributeValuesQuoteType
     *
     * @return string
     */
    public function getAttributeValuesQuoteType()
    {
        return $this->container['attributeValuesQuoteType'];
    }

    /*
     * Sets attributeValuesQuoteType
     *
     * @param string $attributeValuesQuoteType Allows to specify quote type (single or double quotes) for attribute values. Double quotes are default.
     *
     * @return $this
     */
    public function setAttributeValuesQuoteType($attributeValuesQuoteType)
    {
        $allowedValues = $this->getAttributeValuesQuoteTypeAllowableValues();
        if ((!is_numeric($attributeValuesQuoteType) && !in_array($attributeValuesQuoteType, $allowedValues)) || (is_numeric($attributeValuesQuoteType) && !in_array($allowedValues[$attributeValuesQuoteType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'attributeValuesQuoteType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['attributeValuesQuoteType'] = $attributeValuesQuoteType;

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



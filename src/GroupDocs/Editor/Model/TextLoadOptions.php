<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TextLoadOptions.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
 * TextLoadOptions
 *
 * @description Allows to specify custom options for loading plain text (TXT) documents
 */
class TextLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TextLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'encoding' => 'string',
        'recognizeLists' => 'bool',
        'leadingSpaces' => 'string',
        'trailingSpaces' => 'string',
        'enablePagination' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'encoding' => null,
        'recognizeLists' => null,
        'leadingSpaces' => null,
        'trailingSpaces' => null,
        'enablePagination' => null
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
        'recognizeLists' => 'RecognizeLists',
        'leadingSpaces' => 'LeadingSpaces',
        'trailingSpaces' => 'TrailingSpaces',
        'enablePagination' => 'EnablePagination'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encoding' => 'setEncoding',
        'recognizeLists' => 'setRecognizeLists',
        'leadingSpaces' => 'setLeadingSpaces',
        'trailingSpaces' => 'setTrailingSpaces',
        'enablePagination' => 'setEnablePagination'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encoding' => 'getEncoding',
        'recognizeLists' => 'getRecognizeLists',
        'leadingSpaces' => 'getLeadingSpaces',
        'trailingSpaces' => 'getTrailingSpaces',
        'enablePagination' => 'getEnablePagination'
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

    const LEADING_SPACES_CONVERT_TO_INDENT = 'ConvertToIndent';
    const LEADING_SPACES_PRESERVE = 'Preserve';
    const LEADING_SPACES_TRIM = 'Trim';
    const TRAILING_SPACES_TRIM = 'Trim';
    const TRAILING_SPACES_PRESERVE = 'Preserve';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeadingSpacesAllowableValues()
    {
        return [
            self::LEADING_SPACES_CONVERT_TO_INDENT,
            self::LEADING_SPACES_PRESERVE,
            self::LEADING_SPACES_TRIM,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrailingSpacesAllowableValues()
    {
        return [
            self::TRAILING_SPACES_TRIM,
            self::TRAILING_SPACES_PRESERVE,
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
        $this->container['recognizeLists'] = isset($data['recognizeLists']) ? $data['recognizeLists'] : null;
        $this->container['leadingSpaces'] = isset($data['leadingSpaces']) ? $data['leadingSpaces'] : null;
        $this->container['trailingSpaces'] = isset($data['trailingSpaces']) ? $data['trailingSpaces'] : null;
        $this->container['enablePagination'] = isset($data['enablePagination']) ? $data['enablePagination'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['recognizeLists'] === null) {
            $invalidProperties[] = "'recognizeLists' can't be null";
        }
        if ($this->container['leadingSpaces'] === null) {
            $invalidProperties[] = "'leadingSpaces' can't be null";
        }
        $allowedValues = $this->getLeadingSpacesAllowableValues();
        if (!in_array($this->container['leadingSpaces'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leadingSpaces', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['trailingSpaces'] === null) {
            $invalidProperties[] = "'trailingSpaces' can't be null";
        }
        $allowedValues = $this->getTrailingSpacesAllowableValues();
        if (!in_array($this->container['trailingSpaces'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trailingSpaces', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['enablePagination'] === null) {
            $invalidProperties[] = "'enablePagination' can't be null";
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

        if ($this->container['recognizeLists'] === null) {
            return false;
        }
        if ($this->container['leadingSpaces'] === null) {
            return false;
        }
        $allowedValues = $this->getLeadingSpacesAllowableValues();
        if (!in_array($this->container['leadingSpaces'], $allowedValues)) {
            return false;
        }
        if ($this->container['trailingSpaces'] === null) {
            return false;
        }
        $allowedValues = $this->getTrailingSpacesAllowableValues();
        if (!in_array($this->container['trailingSpaces'], $allowedValues)) {
            return false;
        }
        if ($this->container['enablePagination'] === null) {
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
     * @param string $encoding Character encoding of the text document, which will be applied for its opening
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /*
     * Gets recognizeLists
     *
     * @return bool
     */
    public function getRecognizeLists()
    {
        return $this->container['recognizeLists'];
    }

    /*
     * Sets recognizeLists
     *
     * @param bool $recognizeLists Allows to specify how numbered list items are recognized when document is imported from plain text format. The default value is true.
     *
     * @return $this
     */
    public function setRecognizeLists($recognizeLists)
    {
        $this->container['recognizeLists'] = $recognizeLists;

        return $this;
    }

    /*
     * Gets leadingSpaces
     *
     * @return string
     */
    public function getLeadingSpaces()
    {
        return $this->container['leadingSpaces'];
    }

    /*
     * Sets leadingSpaces
     *
     * @param string $leadingSpaces Gets or sets preferred option of a leading space handling. By default converts leading spaces to the left indent.
     *
     * @return $this
     */
    public function setLeadingSpaces($leadingSpaces)
    {
        $allowedValues = $this->getLeadingSpacesAllowableValues();
        if ((!is_numeric($leadingSpaces) && !in_array($leadingSpaces, $allowedValues)) || (is_numeric($leadingSpaces) && !in_array($allowedValues[$leadingSpaces], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'leadingSpaces', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['leadingSpaces'] = $leadingSpaces;

        return $this;
    }

    /*
     * Gets trailingSpaces
     *
     * @return string
     */
    public function getTrailingSpaces()
    {
        return $this->container['trailingSpaces'];
    }

    /*
     * Sets trailingSpaces
     *
     * @param string $trailingSpaces Gets or sets preferred option of a trailing space handling. By default truncates all trailing spaces.
     *
     * @return $this
     */
    public function setTrailingSpaces($trailingSpaces)
    {
        $allowedValues = $this->getTrailingSpacesAllowableValues();
        if ((!is_numeric($trailingSpaces) && !in_array($trailingSpaces, $allowedValues)) || (is_numeric($trailingSpaces) && !in_array($allowedValues[$trailingSpaces], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'trailingSpaces', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['trailingSpaces'] = $trailingSpaces;

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
     * @param bool $enablePagination Allows to enable or disable pagination in the resultant HTML document. By default is disabled (false).
     *
     * @return $this
     */
    public function setEnablePagination($enablePagination)
    {
        $this->container['enablePagination'] = $enablePagination;

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



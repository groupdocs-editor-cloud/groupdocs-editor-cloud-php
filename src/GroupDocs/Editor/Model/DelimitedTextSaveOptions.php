<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DelimitedTextSaveOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * DelimitedTextSaveOptions
 *
 * @description Contains options for generating and saving text-based Spreadsheet documents (CSV, Tab-based etc.), that use a separator (delimiter)
 */
class DelimitedTextSaveOptions extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DelimitedTextSaveOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'separator' => 'string',
        'encoding' => 'string',
        'trimLeadingBlankRowAndColumn' => 'bool',
        'keepSeparatorsForBlankRow' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'separator' => null,
        'encoding' => null,
        'trimLeadingBlankRowAndColumn' => null,
        'keepSeparatorsForBlankRow' => null
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
        'separator' => 'Separator',
        'encoding' => 'Encoding',
        'trimLeadingBlankRowAndColumn' => 'TrimLeadingBlankRowAndColumn',
        'keepSeparatorsForBlankRow' => 'KeepSeparatorsForBlankRow'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'separator' => 'setSeparator',
        'encoding' => 'setEncoding',
        'trimLeadingBlankRowAndColumn' => 'setTrimLeadingBlankRowAndColumn',
        'keepSeparatorsForBlankRow' => 'setKeepSeparatorsForBlankRow'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'separator' => 'getSeparator',
        'encoding' => 'getEncoding',
        'trimLeadingBlankRowAndColumn' => 'getTrimLeadingBlankRowAndColumn',
        'keepSeparatorsForBlankRow' => 'getKeepSeparatorsForBlankRow'
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

    

    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['trimLeadingBlankRowAndColumn'] = isset($data['trimLeadingBlankRowAndColumn']) ? $data['trimLeadingBlankRowAndColumn'] : null;
        $this->container['keepSeparatorsForBlankRow'] = isset($data['keepSeparatorsForBlankRow']) ? $data['keepSeparatorsForBlankRow'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['trimLeadingBlankRowAndColumn'] === null) {
            $invalidProperties[] = "'trimLeadingBlankRowAndColumn' can't be null";
        }
        if ($this->container['keepSeparatorsForBlankRow'] === null) {
            $invalidProperties[] = "'keepSeparatorsForBlankRow' can't be null";
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

        if ($this->container['trimLeadingBlankRowAndColumn'] === null) {
            return false;
        }
        if ($this->container['keepSeparatorsForBlankRow'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets separator
     *
     * @return string
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /*
     * Sets separator
     *
     * @param string $separator Allows to specify a string separator (delimiter) for text-based Spreadsheet documents
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;

        return $this;
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
     * @param string $encoding Allows to set an encoding for the text-based Spreadsheet document. By default (and if not specified) is UTF-8.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /*
     * Gets trimLeadingBlankRowAndColumn
     *
     * @return bool
     */
    public function getTrimLeadingBlankRowAndColumn()
    {
        return $this->container['trimLeadingBlankRowAndColumn'];
    }

    /*
     * Sets trimLeadingBlankRowAndColumn
     *
     * @param bool $trimLeadingBlankRowAndColumn Indicates whether leading blank rows and columns should be trimmed like what MS Excel does
     *
     * @return $this
     */
    public function setTrimLeadingBlankRowAndColumn($trimLeadingBlankRowAndColumn)
    {
        $this->container['trimLeadingBlankRowAndColumn'] = $trimLeadingBlankRowAndColumn;

        return $this;
    }

    /*
     * Gets keepSeparatorsForBlankRow
     *
     * @return bool
     */
    public function getKeepSeparatorsForBlankRow()
    {
        return $this->container['keepSeparatorsForBlankRow'];
    }

    /*
     * Sets keepSeparatorsForBlankRow
     *
     * @param bool $keepSeparatorsForBlankRow Indicates whether separators should be output for blank row. Default value is false which means the content for blank row will be empty.
     *
     * @return $this
     */
    public function setKeepSeparatorsForBlankRow($keepSeparatorsForBlankRow)
    {
        $this->container['keepSeparatorsForBlankRow'] = $keepSeparatorsForBlankRow;

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



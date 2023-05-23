<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SpreadsheetLoadOptions.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
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
 * SpreadsheetLoadOptions
 *
 * @description Allows to specify custom options for editing documents of all supportable Spreadsheet (Excel-compatible) formats
 */
class SpreadsheetLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SpreadsheetLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'worksheetIndex' => 'int',
        'excludeHiddenWorksheets' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'worksheetIndex' => 'int32',
        'excludeHiddenWorksheets' => null
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
        'worksheetIndex' => 'WorksheetIndex',
        'excludeHiddenWorksheets' => 'ExcludeHiddenWorksheets'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'worksheetIndex' => 'setWorksheetIndex',
        'excludeHiddenWorksheets' => 'setExcludeHiddenWorksheets'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'worksheetIndex' => 'getWorksheetIndex',
        'excludeHiddenWorksheets' => 'getExcludeHiddenWorksheets'
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

        $this->container['worksheetIndex'] = isset($data['worksheetIndex']) ? $data['worksheetIndex'] : null;
        $this->container['excludeHiddenWorksheets'] = isset($data['excludeHiddenWorksheets']) ? $data['excludeHiddenWorksheets'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['worksheetIndex'] === null) {
            $invalidProperties[] = "'worksheetIndex' can't be null";
        }
        if ($this->container['excludeHiddenWorksheets'] === null) {
            $invalidProperties[] = "'excludeHiddenWorksheets' can't be null";
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

        if ($this->container['worksheetIndex'] === null) {
            return false;
        }
        if ($this->container['excludeHiddenWorksheets'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets worksheetIndex
     *
     * @return int
     */
    public function getWorksheetIndex()
    {
        return $this->container['worksheetIndex'];
    }

    /*
     * Sets worksheetIndex
     *
     * @param int $worksheetIndex Allows to specify the 0-based index of the worksheet (tab) of the input Spreadsheet document, which should be converted to the HTML.
     *
     * @return $this
     */
    public function setWorksheetIndex($worksheetIndex)
    {
        $this->container['worksheetIndex'] = $worksheetIndex;

        return $this;
    }

    /*
     * Gets excludeHiddenWorksheets
     *
     * @return bool
     */
    public function getExcludeHiddenWorksheets()
    {
        return $this->container['excludeHiddenWorksheets'];
    }

    /*
     * Sets excludeHiddenWorksheets
     *
     * @param bool $excludeHiddenWorksheets Allows to exclude hidden worksheets in the input Spreadsheet document, so they will be totally ignored. Default is false - hidden worksheets are available and processed as normal.
     *
     * @return $this
     */
    public function setExcludeHiddenWorksheets($excludeHiddenWorksheets)
    {
        $this->container['excludeHiddenWorksheets'] = $excludeHiddenWorksheets;

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



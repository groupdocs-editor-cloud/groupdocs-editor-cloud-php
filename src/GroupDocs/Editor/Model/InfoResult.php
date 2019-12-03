<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="InfoResult.php">
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

use \ArrayAccess;
use \GroupDocs\Editor\ObjectSerializer;

/*
 * InfoResult
 *
 * @description Describes document properties result
 */
class InfoResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "InfoResult";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pageCount' => 'int',
        'size' => 'int',
        'isEncrypted' => 'bool',
        'fileFormat' => 'string',
        'extension' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pageCount' => 'int32',
        'size' => 'int64',
        'isEncrypted' => null,
        'fileFormat' => null,
        'extension' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pageCount' => 'PageCount',
        'size' => 'Size',
        'isEncrypted' => 'IsEncrypted',
        'fileFormat' => 'FileFormat',
        'extension' => 'Extension'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageCount' => 'setPageCount',
        'size' => 'setSize',
        'isEncrypted' => 'setIsEncrypted',
        'fileFormat' => 'setFileFormat',
        'extension' => 'setExtension'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageCount' => 'getPageCount',
        'size' => 'getSize',
        'isEncrypted' => 'getIsEncrypted',
        'fileFormat' => 'getFileFormat',
        'extension' => 'getExtension'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['isEncrypted'] = isset($data['isEncrypted']) ? $data['isEncrypted'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pageCount'] === null) {
            $invalidProperties[] = "'pageCount' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['isEncrypted'] === null) {
            $invalidProperties[] = "'isEncrypted' can't be null";
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

        if ($this->container['pageCount'] === null) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['isEncrypted'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets pageCount
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /*
     * Sets pageCount
     *
     * @param int $pageCount Pages count
     *
     * @return $this
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /*
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /*
     * Sets size
     *
     * @param int $size Document size in bytes
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /*
     * Gets isEncrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->container['isEncrypted'];
    }

    /*
     * Sets isEncrypted
     *
     * @param bool $isEncrypted Indicates whether specific file is encrypted and requires password for opening.
     *
     * @return $this
     */
    public function setIsEncrypted($isEncrypted)
    {
        $this->container['isEncrypted'] = $isEncrypted;

        return $this;
    }

    /*
     * Gets fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /*
     * Sets fileFormat
     *
     * @param string $fileFormat File format
     *
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;

        return $this;
    }

    /*
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /*
     * Sets extension
     *
     * @param string $extension Document extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

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



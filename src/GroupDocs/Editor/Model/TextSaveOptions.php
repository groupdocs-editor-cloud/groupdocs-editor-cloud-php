<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TextSaveOptions.php">
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
 * TextSaveOptions
 *
 * @description Allows to specify custom options for generating and saving plain text (TXT) documents
 */
class TextSaveOptions extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TextSaveOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'encoding' => 'string',
        'addBidiMarks' => 'bool',
        'preserveTableLayout' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'encoding' => null,
        'addBidiMarks' => null,
        'preserveTableLayout' => null
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
        'addBidiMarks' => 'AddBidiMarks',
        'preserveTableLayout' => 'PreserveTableLayout'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encoding' => 'setEncoding',
        'addBidiMarks' => 'setAddBidiMarks',
        'preserveTableLayout' => 'setPreserveTableLayout'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encoding' => 'getEncoding',
        'addBidiMarks' => 'getAddBidiMarks',
        'preserveTableLayout' => 'getPreserveTableLayout'
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

        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['addBidiMarks'] = isset($data['addBidiMarks']) ? $data['addBidiMarks'] : null;
        $this->container['preserveTableLayout'] = isset($data['preserveTableLayout']) ? $data['preserveTableLayout'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['addBidiMarks'] === null) {
            $invalidProperties[] = "'addBidiMarks' can't be null";
        }
        if ($this->container['preserveTableLayout'] === null) {
            $invalidProperties[] = "'preserveTableLayout' can't be null";
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

        if ($this->container['addBidiMarks'] === null) {
            return false;
        }
        if ($this->container['preserveTableLayout'] === null) {
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
     * @param string $encoding Character encoding of the text document, which will be applied for its saving
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /*
     * Gets addBidiMarks
     *
     * @return bool
     */
    public function getAddBidiMarks()
    {
        return $this->container['addBidiMarks'];
    }

    /*
     * Sets addBidiMarks
     *
     * @param bool $addBidiMarks Specifies whether to add bi-directional marks before each BiDi run when exporting in plain text format
     *
     * @return $this
     */
    public function setAddBidiMarks($addBidiMarks)
    {
        $this->container['addBidiMarks'] = $addBidiMarks;

        return $this;
    }

    /*
     * Gets preserveTableLayout
     *
     * @return bool
     */
    public function getPreserveTableLayout()
    {
        return $this->container['preserveTableLayout'];
    }

    /*
     * Sets preserveTableLayout
     *
     * @param bool $preserveTableLayout Specifies whether the program should attempt to preserve layout of tables when saving in the plain text format. The default value is false.
     *
     * @return $this
     */
    public function setPreserveTableLayout($preserveTableLayout)
    {
        $this->container['preserveTableLayout'] = $preserveTableLayout;

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



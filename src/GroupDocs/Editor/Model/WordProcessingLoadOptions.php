<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordProcessingLoadOptions.php">
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
 * WordProcessingLoadOptions
 *
 * @description Allows to specify custom options for loading WordProcessing-compliant documents
 */
class WordProcessingLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordProcessingLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'enablePagination' => 'bool',
        'enableLanguageInformation' => 'bool',
        'fontExtraction' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'enablePagination' => null,
        'enableLanguageInformation' => null,
        'fontExtraction' => null
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
        'enablePagination' => 'EnablePagination',
        'enableLanguageInformation' => 'EnableLanguageInformation',
        'fontExtraction' => 'FontExtraction'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enablePagination' => 'setEnablePagination',
        'enableLanguageInformation' => 'setEnableLanguageInformation',
        'fontExtraction' => 'setFontExtraction'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enablePagination' => 'getEnablePagination',
        'enableLanguageInformation' => 'getEnableLanguageInformation',
        'fontExtraction' => 'getFontExtraction'
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

    const FONT_EXTRACTION_NOT_EXTRACT = 'NotExtract';
    const FONT_EXTRACTION_EXTRACT_ALL_EMBEDDED = 'ExtractAllEmbedded';
    const FONT_EXTRACTION_EXTRACT_EMBEDDED_WITHOUT_SYSTEM = 'ExtractEmbeddedWithoutSystem';
    const FONT_EXTRACTION_EXTRACT_ALL = 'ExtractAll';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontExtractionAllowableValues()
    {
        return [
            self::FONT_EXTRACTION_NOT_EXTRACT,
            self::FONT_EXTRACTION_EXTRACT_ALL_EMBEDDED,
            self::FONT_EXTRACTION_EXTRACT_EMBEDDED_WITHOUT_SYSTEM,
            self::FONT_EXTRACTION_EXTRACT_ALL,
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

        $this->container['enablePagination'] = isset($data['enablePagination']) ? $data['enablePagination'] : null;
        $this->container['enableLanguageInformation'] = isset($data['enableLanguageInformation']) ? $data['enableLanguageInformation'] : null;
        $this->container['fontExtraction'] = isset($data['fontExtraction']) ? $data['fontExtraction'] : null;
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
        if ($this->container['enableLanguageInformation'] === null) {
            $invalidProperties[] = "'enableLanguageInformation' can't be null";
        }
        if ($this->container['fontExtraction'] === null) {
            $invalidProperties[] = "'fontExtraction' can't be null";
        }
        $allowedValues = $this->getFontExtractionAllowableValues();
        if (!in_array($this->container['fontExtraction'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fontExtraction', must be one of '%s'",
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
        if ($this->container['enableLanguageInformation'] === null) {
            return false;
        }
        if ($this->container['fontExtraction'] === null) {
            return false;
        }
        $allowedValues = $this->getFontExtractionAllowableValues();
        if (!in_array($this->container['fontExtraction'], $allowedValues)) {
            return false;
        }
        return true;
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
     * Gets enableLanguageInformation
     *
     * @return bool
     */
    public function getEnableLanguageInformation()
    {
        return $this->container['enableLanguageInformation'];
    }

    /*
     * Sets enableLanguageInformation
     *
     * @param bool $enableLanguageInformation Specifies whether language information is exported to the HTML markup in a form of 'lang' HTML attributes. This option may be useful for roundtrip conversion of the multi-language documents. By default it is disabled (false).
     *
     * @return $this
     */
    public function setEnableLanguageInformation($enableLanguageInformation)
    {
        $this->container['enableLanguageInformation'] = $enableLanguageInformation;

        return $this;
    }

    /*
     * Gets fontExtraction
     *
     * @return string
     */
    public function getFontExtraction()
    {
        return $this->container['fontExtraction'];
    }

    /*
     * Sets fontExtraction
     *
     * @param string $fontExtraction Responsible for extracting font resources, which are used in the input WordProcessing document. By default doesn't extract any fonts (NotExtract).
     *
     * @return $this
     */
    public function setFontExtraction($fontExtraction)
    {
        $allowedValues = $this->getFontExtractionAllowableValues();
        if ((!is_numeric($fontExtraction) && !in_array($fontExtraction, $allowedValues)) || (is_numeric($fontExtraction) && !in_array($allowedValues[$fontExtraction], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'fontExtraction', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['fontExtraction'] = $fontExtraction;

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



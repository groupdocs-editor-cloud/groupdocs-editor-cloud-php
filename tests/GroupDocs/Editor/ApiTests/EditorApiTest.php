<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="EditorGetInfoApiTest.php">
*   Copyright (c) 2003-2022 Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Editor\ApiTests;

use GroupDocs\Editor\Model\Requests;
use \GroupDocs\Editor\Model;

require_once "BaseApiTest.php";

class EditorApiTest extends BaseApiTest
{
    public function testOpenSaveDocx()
    {
        // Load
        $testFile = Internal\TestFiles::getFileFourPagesDocx();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }
 
    public function testOpenSaveDocxProtected()
    {
        // Load
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }    

    public function testOpenSaveDocxWithOptions()
    {
        // Load
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();
        
        $loadOptions = new Model\WordProcessingLoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        $loadOptions->setEnablePagination(true);
        $loadOptions->setFontExtraction(Model\WordProcessingLoadOptions::FONT_EXTRACTION_EXTRACT_ALL);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\WordProcessingSaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        $saveOptions->setEnablePagination(true);
        $saveOptions->setFormat("Docx");
        $saveOptions->setPassword($testFile->password);
        $saveOptions->setProtectionPassword($testFile->password);
        $saveOptions->setProtectionType(Model\WordProcessingSaveOptions::PROTECTION_TYPE_ALLOW_ONLY_COMMENTS);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }

    public function testOpenSaveXlsx()
    {
        // Load
        $testFile = Internal\TestFiles::getFileFourSheetsXlsx();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    } 
    
    public function testOpenSaveXlsxProtected()
    {
        // Load
        $testFile = Internal\TestFiles::getFileFourSheetsProtectedXlsx();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    } 
    
    public function testOpenSaveXlsxWithOptions()
    {
        // Load
        $testFile = Internal\TestFiles::getFileFourSheetsProtectedXlsx();
        
        $loadOptions = new Model\SpreadsheetLoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        $loadOptions->setExcludeHiddenWorksheets(true);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SpreadsheetSaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        $saveOptions->setFormat("xlsx");
        $saveOptions->setPassword($testFile->password);
        $saveOptions->setProtectionPassword($testFile->password);
        $saveOptions->setProtectionType(Model\SpreadsheetSaveOptions::PROTECTION_TYPE_ALL);        
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    } 
    
    public function testOpenSaveTsv()
    {
        // Load
        $testFile = Internal\TestFiles::getFileSampleTsv();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    } 

    public function testOpenSaveTsvWithOptions()
    {
        // Load
        $testFile = Internal\TestFiles::getFileSampleTsv();
        
        $loadOptions = new Model\DelimitedTextLoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        $loadOptions->setSeparator("\t");
        $loadOptions->setConvertNumericData(true);
        $loadOptions->setTreatConsecutiveDelimitersAsOne(true);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\DelimitedTextSaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        $saveOptions->setEncoding("UTF-8");
        $saveOptions->setFormat("tsv");
        $saveOptions->setKeepSeparatorsForBlankRow(true);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }     
    
    public function testOpenSaveText()
    {
        // Load
        $testFile = Internal\TestFiles::getFileTxt();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }     
    
    public function testOpenSaveTextWithOptions()
    {
        // Load
        $testFile = Internal\TestFiles::getFileTxt();
        
        $loadOptions = new Model\TextLoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        $loadOptions->setEnablePagination(true);
        $loadOptions->setLeadingSpaces(Model\TextLoadOptions::LEADING_SPACES_TRIM);
        $loadOptions->setRecognizeLists(true);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\TextSaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        $saveOptions->setAddBidiMarks(true);
        $saveOptions->setEncoding("UTF-8");
        $saveOptions->setFormat("txt");
        $saveOptions->setPreserveTableLayout(true);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }  
    
    public function testOpenSavePresentation()
    {
        // Load
        $testFile = Internal\TestFiles::getFileWithNotesPptx();
        
        $loadOptions = new Model\LoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\SaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    } 
    
    public function testOpenSavePresentationWithOptions()
    {
        // Load
        $testFile = Internal\TestFiles::getFileWithHiddenSlidePptx();
        
        $loadOptions = new Model\PresentationLoadOptions();
        $loadOptions->setFileInfo($testFile->ToFileInfo());
        $loadOptions->setOutputPath(self::$outputPath);
        $loadOptions->setShowHiddenSlides(true);
        $loadOptions->setSlideNumber(0);
        
        $loadResult = self::$editApi->load(new Requests\loadRequest($loadOptions));
        $this->assertFalse(empty($loadResult->getHtmlPath()));
        $this->assertFalse(empty($loadResult->getResourcesPath()));   
        
        // Save     
        $saveOptions = new Model\PresentationSaveOptions();
        $saveOptions->setFileInfo($testFile->ToFileInfo());
        $saveOptions->setHtmlPath($loadResult->getHtmlPath());
        $saveOptions->setResourcesPath($loadResult->getResourcesPath());
        $saveOptions->setOutputPath(self::$outputPath . "/" . $testFile->fileName);
        $saveOptions->setPassword("password");
        
        $saveResult = self::$editApi->save(new Requests\saveRequest($saveOptions));
        $this->assertEquals($saveOptions->getOutputPath(), $saveResult->getPath());
    }     
}

<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="EditorGetInfoApiTest.php">
*   Copyright (c) Aspose Pty Ltd
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

require_once "BaseApiTestCase.php";

class EditorGetInfoApiTest extends BaseApiTestCase
{
    public function testGetInfoReturnsFileNotFound()
    {
        $this->expectException(\GroupDocs\Editor\ApiException::class);
        $this->expectExceptionMessage("Can't find file located at 'some-folder/NotExist.docx'.");        

        $testFile = Internal\TestFiles::getFileNotExist();

        $request = new Requests\getInfoRequest($testFile->ToFileInfo());
       
        $response = self::$infoApi->getInfo($request);
    }

    public function testGetInfo()
    {
        $testFile = Internal\TestFiles::getFilePasswordProtectedDocx();

        $request = new Requests\getInfoRequest($testFile->ToFileInfo());
       
        $response = self::$infoApi->getInfo($request);
        $this->assertFalse(empty($response));
        $this->assertEquals(4, $response->getPageCount());
    }
 
}

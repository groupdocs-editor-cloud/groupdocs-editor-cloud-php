![](https://img.shields.io/badge/api-v1.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/groupdocscloud/groupdocs-editor-cloud) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/groupdocscloud/groupdocs-editor-cloud) [![GitHub license](https://img.shields.io/github/license/groupdocs-editor-cloud/groupdocs-editor-cloud-php)](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-php/blob/master/LICENSE)

# PHP SDK to Document Editor REST API

[GroupDocs.Editor Cloud SDK for PHP](https://products.groupdocs.cloud/editor/php) wraps GroupDocs.Editor RESTful API so you may integrate Document Editing features in your own apps with zero initial cost.

GroupDocs.Editor Cloud API allows the developers to edit most popular document formats using front-end WYSIWYG editors - without needing the applications like OpenOffice or Microsoft Office. Just load documents via GroupDocs.Editor into any WYSIWYG editor, edit document in a way you want and save it back to original document format.

## Document Editing in the Cloud

GroupDocs.Editor Cloud provides a set of options to customize the editing process dependending on the document type.

- **Word Processing:** Edit document in a flow or paged mode, consider language information for multi-language document editing, manage font extraction to provide the same document editing and appearance behavior in different environments.
- **Spreadsheets:** Supports multi-tabbed spreadsheet editing with the ability to specify the index of the currently edited worksheet.
- **Comma-Separated & Tab-Separated Values:** Specify separator, flexible numeric and dates conversion, memory usage optimization for large files.
- **Markup:** Fix incorrect document structure, URI & e-mail address recognition, highlight and formatting options.

### Document Information Extraction

GroupDocs.Editor Cloud also provides the ability to extract basic information about the edited document.

- Document type
- Document size
- Pages count

Check out the [Developer's Guide](https://docs.groupdocs.cloud/editor/developer-guide/) to know more about GroupDocs.Editor REST API.

## Microsoft Office Formats

**Microsoft Word:** DOC, DOCX, DOCM, DOT, DOTM, DOTX, RTF, FlatOpc, WordML\
**Microsoft Excel:** XLS, XLSX, XLSM, XLT, XLTX, XLTM, XLSB, XLAM, SpreadsheetML\
**Microsoft PowerPoint:** PPT, PPTX, PPTM, PPS, PPSX, PPSM, POT, POTX, POTM

## Other Formats

**OpenDocument:** ODT, OTT, ODP, OTP, ODS, FODS\
**Markup:** HTML, XML\
**Others:** SXC, DIF, DSV, TXT, CSV, TSV

## Get Started with GroupDocs.Editor Cloud SDK for PHP

First create an account at [GroupDocs for Cloud](https://dashboard.groupdocs.cloud/) and get your application information. Next, follow the installation steps as given below.

### Installation via Composer

The package is available at [Packagist](https://packagist.org/) and can be installed via [Composer](http://getcomposer.org/) by executing the following command.
```
composer require groupdocscloud/groupdocs-editor-cloud
``` 

Alternatively, add the following to `composer.json` to install SDK via [Composer](http://getcomposer.org/) directly from this repository.

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-editor-cloud": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file.

```php
require_once('/path/to/groupdocs-editor-cloud-php/vendor/autoload.php');
```

### Tests

Set your application information in [json.config](tests/GroupDocs/Editor/config.json) and execute following commands to run the tests.

```
php composer.phar install
./vendor/bin/phpunit
```

## Edit Word Document in the Cloud via PHP

```php
// For complete examples and data files, please go to https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-php-samples
use GroupDocs\Editor\Model;
use GroupDocs\Editor\Model\Requests;
 
// Get your application from https://dashboard.groupdocs.cloud
$AppSid = ""; 
$AppKey = ""; 
  
$configuration = new GroupDocs\Editor\Configuration();
$configuration->setAppSid($AppSid);
$configuration->setAppKey($AppKey);
 
$editApi = new GroupDocs\Editor\EditApi($configuration);
$fileApi = new GroupDocs\Editor\FileApi($configuration);
 
// The document already uploaded into the storage
// Load it into editable state
$fileInfo = new Model\FileInfo();
$fileInfo->setFilePath("WordProcessing/password-protected.docx");
$fileInfo->setPassword("password");
$loadOptions = new Model\WordProcessingLoadOptions();
$loadOptions->setFileInfo($fileInfo);
$loadOptions->setOutputPath("output");
$loadResult = $editApi->load(new Requests\loadRequest($loadOptions));
 
// Download html document
$htmlFile = $fileApi->downloadFile(new Requests\downloadFileRequest($loadResult->getHtmlPath()));
$html = file_get_contents($htmlFile->getRealPath());
 
// Edit something...
$html = str_replace("Sample test text", "Hello world", $html);
 
// Upload html back to storage
file_put_contents($htmlFile->getRealPath(), $html);
$uploadRequest = new Requests\uploadFileRequest($loadResult->getHtmlPath(), $htmlFile->getRealPath());
$fileApi->uploadFile($uploadRequest);
 
// Save html back to docx
$saveOptions = new Model\WordProcessingSaveOptions();
$saveOptions->setFileInfo($fileInfo);
$saveOptions->setOutputPath("output/edited.docx");
$saveOptions->setHtmlPath($loadResult->getHtmlPath());
$saveOptions->setResourcesPath($loadResult->getResourcesPath());
$saveResult = $editApi->save(new Requests\saveRequest($saveOptions));
 
// Done.
echo "Document edited: " . $saveResult->getPath();
```

## GroupDocs.Editor Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js | Android |
|---|---|---|---|---|---|---|
| [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-dotnet) | [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-java) | [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-php) | [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-python) | [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-ruby)  | [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-node) | [GitHub](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-android) |
| [NuGet](https://www.nuget.org/packages/GroupDocs.Editor-Cloud/) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-editor-cloud) | [Composer](https://packagist.org/packages/groupdocscloud/groupdocs-editor-cloud) | [PIP](https://pypi.org/project/groupdocs-editor-cloud/) | [GEM](https://rubygems.org/gems/groupdocs_editor_cloud)  | [NPM](https://www.npmjs.com/package/groupdocs-editor-cloud) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-editor-cloud-android) |

[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/editor/php) | [Documentation](https://docs.groupdocs.cloud/editor/) | [Live Demo](https://products.groupdocs.app/editor/total) | [API Reference](https://apireference.groupdocs.cloud/editor/) | [Code Samples](https://github.com/groupdocs-editor-cloud/groupdocs-editor-cloud-php-samples) | [Blog](https://blog.groupdocs.cloud/category/editor/) | [Free Support](https://forum.groupdocs.cloud/c/editor) | [Free Trial](https://dashboard.groupdocs.cloud)

# TCA select item
    Author: Michael Semle
    E-Mail: git@mikeproduction.de
    repo:   https://github.com/true-programming/tca-select-items

This extension provides helper functionality for TCA select items. For beginners, adding TCA items via array parameter is kinda frustrating. Using this extension and it's select item model class no need to remember the correct array usage.

## Usage
For example for tt_content CType:
```
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    (new \Trueprogramming\TcaSelectItems\TCA\TCASelectItem(
        'My awesom select item',
        'awesom_select_item',
        'EXT:awesom_extension/Resources/Public/Icons/Extension.svg',
        'group-awesome'
    ))->toArray()
);
```

## How to install this extension?

You can set this up via composer (`composer require trueprogramming/tca-select-items`).

## Requirements

* TYPO3 v12.

## License

The extension is licensed under GPL v2+, same as the TYPO3 Core.

For details see the LICENSE file in this repository.

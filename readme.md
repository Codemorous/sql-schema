
# CzProject\SqlSchema

[![Build Status](https://travis-ci.org/czproject/sql-schema.svg?branch=master)](https://travis-ci.org/czproject/sql-schema)

Library for describe of the database schema.

<a href="https://www.patreon.com/bePatron?u=9680759"><img src="https://c5.patreon.com/external/logo/become_a_patron_button.png" alt="Become a Patron!" height="35"></a>


## Installation

[Download a latest package](https://github.com/czproject/sql-schema/releases) or use [Composer](http://getcomposer.org/):

```
composer require czproject/sql-schema
```

CzProject\SqlSchema requires PHP 5.3.0 or later.


## Usage

``` php
use CzProject\SqlSchema\Index;
$schema = new CzProject\SqlSchema\Schema;

$table = $schema->addTable('book');
$table->addColumn('id', 'INT', NULL, array('UNSIGNED'));
$table->addColumn('name', 'VARCHAR', array(200));
$table->addColumn('author_id', 'INT', NULL, array('UNSIGNED'));
$table->addIndex(NULL, Index::TYPE_PRIMARY, 'id');
$table->addIndex('name_author_id', Index::TYPE_UNIQUE, array('name', 'author_id'));

$schema->getTables();
```

------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/

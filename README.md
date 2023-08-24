# GUID PHP

**Semiorbit GUID** is a PHP library to create a GUID that is compatible with  Microsoft .NET Framework (C#) GUID.

## Install

```composer
composer require semiorbit/guid
```

## Documentation

### Guid::NewGuid

Generates a GUID that is compatible with  Microsoft .NET Framework GUID.

```php
Guid::NewGuid(string $separator = '-', bool $enclose = true) : string
```
#### Params
* string **$separator** dash by default
* bool **$enclose** enclose a GUID in curly braces.
* returns string
  
```php
use SemiorbitGuid\Guid;

echo Guid::NewGuid();

// OUTPUT:
// {6BE33503-D448-0264-11AC-38822224B694}
```

### Guid::Create

Generates a raw GUID that is compatible with  Microsoft .NET Framework GUID, but not formatted or enclosed.

```php
Guid::Create(): string
```

* returns string

```php
use SemiorbitGuid\Guid;

echo Guid::Create();

// OUTPUT:
// 53FED73BF73C7D4C720DD8EE8DAB8B2B
```

### Guid::Format

Returns a formatted GUID string width dashes (or selected separator) and optionally enclosed with curly braces

```php 
Guid::Format(string $guid, bool $enclose = true, string $separator = '-'): string
```

#### Params

* string **$guid** A guid string to parse
* bool **$enclose** True by default, to enclose guid string by **{curly braces}** 
* string **$separator** Dash by default
* returns string **{xxxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxxxxxx}**
  
```php
use SemiorbitGuid\Guid;

$guid = '4F93820EFEF290A26489E0AE803A37C0';

echo Guid::Format($guid);

// OUTPUT:
// {4F93820E-FEF2-90A2-6489-E0AE803A37C0}
```

## License

The Semiorbit GUID is an open-source PHP library licensed under the [MIT license](http://opensource.org/licenses/MIT).
# Kalkulator

A simple calculator package

## 1. Installation

### 1.a Composer Installation

If you are using [Composer](https://getcomposer.org), add this require line to your `composer.json` file:

```json
{
    "require": {
        "rulzi/kalkulator": "dev-master"
    }
}
```

and run `composer install` on your terminal.

## 2. How to Use

### 2.1 Plus

```php

$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->tambah(8, 4);

```

### 2.2 Substraction

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kurang(8, 4);
```

### 2.3 Multiplication

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kali(8, 4);
```

### 2.4 Division

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->bagi(8, 4);
```

### 2.5 Square

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kuadrat(8);
```

### 2.6 Pow 2

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kubik(8);
```

### 2.7 Akar Kuadrat

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->akar_kuadrat(8, 7);
```

### 2.8 Root

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->akar(8);
```


### 2.9 Pow

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->pangkat(8, 2);
```


## Contact

Please report any bugs to productive.afandi@gmail.com.
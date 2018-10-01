# Kalkulator

Package kalkulator sederhana

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

### 2.1 Tambah

```php

$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->tambah(8, 4);

```

### 2.2 Kurang

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kurang(8, 4);
```

### 2.3 Kali

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kali(8, 4);
```

### 2.4 Bagi

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->bagi(8, 4);
```

### 2.5 Kuadrat

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kuadrat(8);
```

### 2.6 Bagi

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kubik(8);
```

## Contact

Please report any bugs to productive.afandi@gmail.com.
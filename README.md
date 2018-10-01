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

### 2.6 Kubik

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->kubik(8);
```

### 2.7 Akar Kuadrat

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->akar_kuadrat(8, 7);
```

### 2.8 Akar

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->akar(8);
```


### 2.9 Pangkat

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->pangkat(8, 2);
```

### 2.10 Phi

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->phi(8);
```

### 2.11 Diameter Lingkaran 

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

$kalkulator->diameterLingkaran(8);
```

## Contact

Please report any bugs to productive.afandi@gmail.com.
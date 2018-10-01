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

```php
$kalkulator = new \Rulzi\Kalkulator\Operasi();

//tambah
$kalkulator->tambah(8, 4);

//kurang
$kalkulator->kurang(8, 4);

//kali
$kalkulator->kali(8, 4);

//bagi
$kalkulator->bagi(8, 4);

//kuadrat
$kalkulator->kuadrat(8);

//kubik
$kalkulator->kubik(8);

//akar kuadrat
$kalkulator->akar_kuadrat(8);

//akar
$kalkulator->akar(9, 3);

//pangakat
$kalkulator->pangkat(8, 2);

//phi
$kalkulator->phi(8);

//diameter linkaran
$kalkulator->diameterLingkaran(8);

//luas persegi
$kalkulator->luasPersegi(8, 2);

//luas linkaran
$kalkulator->luasLingkaran(8);
```

## Contact

Please report any bugs to productive.afandi@gmail.com.
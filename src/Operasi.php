<?php

namespace Rulzi\Kalkulator;

class Operasi
{
	public function tambah(int $a, int $b)
	{
		$hasil = $a + $b;

		return $hasil;
	}

	public function kurang(int $a, int $b)
	{
		$hasil = $a - $b;

		return $hasil;
	}

	public function kali(int $a, int $b)
	{
		$hasil = $a * $b;

		return $hasil;
	}

	public function bagi(int $a, int $b)
	{
		$hasil = $a / $b;

		return $hasil;
	}
}
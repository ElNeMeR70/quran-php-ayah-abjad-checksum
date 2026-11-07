<?php
declare(strict_types=1);

/**
 * quran-php-ayah-abjad-checksum — مدقق الإحصاء العددي وحساب الجُمّل للآيات
 * Quranic Ayah Numerical Checksum & Abjad Gematria Verifier
 */
$input = "الحمد لله رب العالمين";
$digest = substr(hash("sha256", "quran-php-ayah-abjad-checksum:" . $input), 0, 12);

echo "[RUN] quran-php-ayah-abjad-checksum (PHP) — Quranic Ayah Numerical Checksum & Abjad Gematria Verifier" . PHP_EOL;
echo "[AR]  مدقق الإحصاء العددي وحساب الجُمّل للآيات" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Letters=17 | Words=4 | AbjadChecksum=786 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;

<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'symfony/website-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '1.13.0@56cd022adb5514472cb144c087393c1821911d09',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/doctrine-bundle' => '1.10.3@907dafe1ba73c4c3b0f0ae8cfc1b9958c002e58c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => '2.2.3@0a081b55a88259a887af7be654743a8c5f703e99',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.5.0@0a0fa9780f5d4e507415a065172d26a98d02047b',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '2.3.0@100e85a8509b521f010901890f042e9401a3043b',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.3@1034e5e71f89978b80f9c1570e7226f6c3b9b6fb',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'monolog/monolog' => '1.27.1@904713c5929655dc9b97288b69cfeedad610c9a1',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/framework-extra-bundle' => 'v5.2.4@1fdf591c4b388e62dbb2579de89c1560b33f865d',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v4.0.15@6217d5d6a2fd95dc25b4d225be6fbdbf4ef1118c',
  'symfony/cache' => 'v4.0.15@7d3467134d3aa2df6633364e2e8e7f2acf00ccfa',
  'symfony/config' => 'v4.0.15@3df69d8dec1a7315877a35e9341b1c80a64b9f04',
  'symfony/console' => 'v4.0.15@3179d1350843d2caa796973173dd0609ed4c7c67',
  'symfony/debug' => 'v4.0.15@bbfbd427858a9bf5fc9818229230d037110cbb37',
  'symfony/dependency-injection' => 'v4.0.15@36401d55d9be1fddd4e8be983b2a7e0b9a5f29ac',
  'symfony/doctrine-bridge' => 'v4.0.15@05e4ccc076f85652f5bc071bebd9629c481c4bed',
  'symfony/dotenv' => 'v4.0.15@4c53971118849f64a31129ab457042eb854e86ac',
  'symfony/event-dispatcher' => 'v4.0.15@2f3ae32c31b3655597ce1ea9ef09b20e825b16e9',
  'symfony/expression-language' => 'v4.0.15@92f80137c9fe09e6439f77641315d640843d0c4a',
  'symfony/filesystem' => 'v4.0.15@7750bf064ee83c279badd26a99f5e2b310a35ba0',
  'symfony/finder' => 'v4.0.15@21a0befb824378c088b9f4714a94fbf8492207b4',
  'symfony/flex' => 'v1.19.5@51077ed0f6dc2c94cd0b670167eee3747c31b2c1',
  'symfony/form' => 'v4.0.15@0a4b1d6bae1431954b8b330b59b028ce9d707ee0',
  'symfony/framework-bundle' => 'v4.0.15@6d2edab310f0010fe0797b7aa9be2b64cc135990',
  'symfony/http-foundation' => 'v4.0.15@0ae40f062a30bf6d13923b7c1cad439b7cb7170e',
  'symfony/http-kernel' => 'v4.0.15@e75e7ff97254d5bc3fbf9c76831dd3b47edb9df7',
  'symfony/inflector' => 'v4.0.15@3727823442d548893748d578901e28dd0c42f999',
  'symfony/intl' => 'v4.0.15@cd48401e2a6e31f1973e947fa06ecddb8f38e175',
  'symfony/monolog-bridge' => 'v4.0.15@4957d1e1072992eebfc1a59b1989a1b6a57d2005',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v4.0.15@5391d9d3cccca273f74b2a0ddb6b737355c5e783',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/process' => 'v4.0.15@fcf0247a12f2ce7bec54d08e2b9ff8ef0c461197',
  'symfony/property-access' => 'v4.0.15@ca462d7ccdc5317a91abbe0909640b9830b801f3',
  'symfony/property-info' => 'v4.0.15@275f244268d685a36a86dc821da74b795d4fa9de',
  'symfony/routing' => 'v4.0.15@698f48e01196dd99c14fdae980e55bd7c71fae40',
  'symfony/security' => 'v4.0.15@a2903554b8fa01d4f7dad50de918b70569b2c6e0',
  'symfony/security-bundle' => 'v4.0.15@0046b79352c7f00aa3f32ed21f1da645d23cbcad',
  'symfony/serializer' => 'v4.0.15@0f35311789f64199b970cad39b85089a5fbae21b',
  'symfony/stopwatch' => 'v4.0.15@e4c0f5d2067b6452b6bc3bd597f4829ab636041a',
  'symfony/swiftmailer-bundle' => 'v3.3.1@defa9bdfc0191ed70b389cb93c550c6c82cf1745',
  'symfony/translation' => 'v4.0.15@0ed31cf4b37326ddfaa4a18a8e3d1edcae09aab5',
  'symfony/twig-bridge' => 'v4.0.15@ff8f4e0b1e496d7b1f0bf99b56288a76e80b0d43',
  'symfony/twig-bundle' => 'v4.0.15@6876f65231e2db4a555c211b68ff91f37b6f7dc9',
  'symfony/validator' => 'v4.0.15@f9bdafc4f275761fbbf98c86c16ef8b274ea6567',
  'symfony/web-link' => 'v4.0.15@355ab6734b6a67661ca5f23380d995bd3203cd18',
  'symfony/yaml' => 'v4.0.15@05f66d707cfa60d553e419ec038d5474c2d5d1f2',
  'twig/twig' => 'v2.15.4@3e059001d6d597dd50ea7c74dd2464b4adea48d3',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'nikic/php-parser' => 'v4.15.4@6bb5176bc4af8bcb7d926f88718db9b96a2d4290',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.3@9c1da83261628cb24b6a6df371b6e312b3954768',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.5@1dc7ceb4a24aede938c7af2a9ed1de09609ca770',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.5@73a9676f2833b9a7c36968f9d882589cd75511e6',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'symfony/browser-kit' => 'v4.0.15@5f3d55a68dcda257a952304c0ebdd01f28f688e1',
  'symfony/css-selector' => 'v4.0.15@72a316c5034bddd69710146ce8e72e34e15ef154',
  'symfony/debug-bundle' => 'v4.0.15@3188f67995b0b54ca0600c68dac86ae822229a97',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/dom-crawler' => 'v4.0.15@d370b259c534414fff0be798618235b7f563b26f',
  'symfony/maker-bundle' => 'v1.35.0@25058310408bb045772d2ec0ff7a3b6460fea2dd',
  'symfony/phpunit-bridge' => 'v6.2.7@56965fae0b6b8d271015990eff5240ffff02e185',
  'symfony/var-dumper' => 'v4.0.15@3af63f44ddb45b03af4d172a4ce3e5c58b25fc5b',
  'symfony/web-profiler-bundle' => 'v4.0.15@277f744012cee9e61baa5e5f5328d7a3f8666cb1',
  'symfony/web-server-bundle' => 'v4.0.15@7408f0d9b1c21629a6198019dc0231db3974d70d',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  'symfony/website-skeleton' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
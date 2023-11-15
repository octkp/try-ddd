# これは何か
DDD本のサンプルコードをphpで書き直してみるものです。

`chapter/{チャプター番号}/{リスト番号}.php`となってます。

DDD本のリスト2.4であれば、`chapter/2/4.php`が対応するコードになります。

# コードの実行方法
## 初回準備
```
git clone git@github.com:octkp/try-ddd.git
cd try-ddd
composer install
```
※php8.1以上がインストールされている前提

以下のようにしてください。
```
php index.php {チャプター番号} {リスト番号}
```
### 例：リスト2-3のコードを実行したい場合
`try-ddd`に移動し、以下
```
php index.php 2 3
```
実行結果
```
> php index.php 2 3
Array
(
    [0] => lastName：john
)
```
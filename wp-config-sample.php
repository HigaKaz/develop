<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_6a3ad61f940b8db');


/** MySQL データベースのユーザー名 */
define('DB_USER', 'bf2445aa1b857e');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '71d6db9d');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '/EI]w+etn$lyH|. 7+bms1fB+`C$V<{T-;ByW:&#M,L3+0PgTB>Ke-yHXID-&b&^');
 define('SECURE_AUTH_KEY',  'p4yH9lxmZz6`(|bYO(@T(@[+OG!9=KdGN:C#hEbr2&qb_`x_r/><m`>VzC/%!Och');
 define('LOGGED_IN_KEY',    's+eYLHGP`x|U(o{AyXyVO0~#IStsGJ)GS7@wTe_~}6$|t5w|3~M,ExdnoLK<(R@9');
 define('NONCE_KEY',        '+=1]-lU2HQ3Wg8WxVEI1PFrFdD:%G3~+Kfgln|kq^sjnka`MKC{]o,;P:|l8YI&5');
 define('AUTH_SALT',        'RR!2|F~R^<n}MN1GVNCVD G(|MJ)3hV|Pfu(-ikS*g!a(]{k>9g9Q]-]VYA,~;,`');
 define('SECURE_AUTH_SALT', '-3):Z:T7+.8MDGMcdaRjxQKB&1XGtQpTS~C2V6kuYa%g@>?NU3sz0[7EDTnk_Dv}');
 define('LOGGED_IN_SALT',   'mN@#Ignn:**(.(gQVQG|MIk|=oKqW%@Y)+ZTutKbWN4?pAhX:7g/SsEt*x0|7w+#');
 define('NONCE_SALT',       '|%[9`BF[aiZf&4nQ%_~MPid|$%|RTwM`-ctQ|=wsq0w#[2?5A2hU.pM~@hXH]uBi');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# reypage-wp-theme-reform

架空のリフォーム会社「しおり住まい工房」のサンプルサイトを、WordPress のオリジナルテーマにしたものです。施工事例とお知らせを、お客様が管理画面から追加・修正できるように作っています。有料のプラグインは使っていません（プラグインなしで動きます）。

- 静的版のサンプルサイト：https://reypage.pages.dev/reform/
- 管理画面の説明ページ：https://reypage.pages.dev/reform/wordpress/
- ブラウザで操作を試せるデモ（WordPress Playground）：https://playground.wordpress.net/?blueprint-url=https://reypage.pages.dev/wp/blueprint.json

会社名・住所・施工事例・金額・人物はすべて架空です。

## 動作環境

- WordPress 6.4 以上
- PHP 8.0 以上

## 実装している内容

### 施工事例（カスタム投稿タイプ `works`）

- 管理画面のメニュー名は「施工事例」。一覧は `/works/` で表示します（`archive-works.php`）
- 1件の表示は `single-works.php`、トップと一覧で使う1件分の部品は `parts/case.php`
- 写真はアイキャッチ画像を使います
- 「工事の種類」「建物」「工期」「費用」「地域」の5項目は、ブロックエディタの下に出る入力欄（メタボックス）から入れます。値は投稿メタとして保存し、サイトでは表の形で表示します
  - `register_post_meta` で登録し、`sanitize_text_field` で整えています。保存時は nonce と編集権限を確かめます
  - 項目の定義は `functions.php` の `shiori_works_fields()` 1か所にまとめ、入力欄と表示の両方で使っています
- アイキャッチ画像がない事例は、本文の最初の「カスタムHTML」ブロック（間取り図など）を写真の位置に表示します
- 抜粋に書いた文章が、トップと一覧の説明文になります

### お知らせ（標準の投稿）

- 管理画面では「投稿」を「お知らせ」という名前で表示します
- トップに最新3件、お知らせ用の固定ページ（表示設定の「投稿ページ」）に一覧を表示します（`home.php`）
- 1件の表示は `single.php`
- コメントは使わない設定にしています

### お客様用のアカウント

お客様には「編集者」の権限のアカウントを渡す前提です。編集者でログインしたときは、次のようにしています。

- 左のメニューから固定ページ・ツール・コメントを外し、「お知らせ」「施工事例」「メディア」が目立つようにしています
- ダッシュボードの標準の枠を外し、「施工事例を追加する」「お知らせを書く」のボタンだけを置いた枠を表示します

### 表示

- トップ（`front-page.php`）は、よくご相談いただく工事、施工事例（最新2件）、工事費用の目安、自社施工について、ご相談から工事までの流れ、最近のお知らせ、お客様の声（差し替え枠）、会社概要、よくある質問、見積りのご相談の順です
- メニューは `header.php` に固定で書いています（カスタムメニューには対応していません）
- 見積りのフォームは見本で、送信はされません
- 書体は Google Fonts から読み込みます（Zen Kaku Gothic New、Shippori Mincho）。編集画面の書体もサイトと揃えています（`editor-style.css`）
- スマートフォンでは、画面の下に「費用の目安」と「見積りを相談する」のボタンを固定で表示します

## ファイル構成

```
style.css            テーマ情報とスタイル
functions.php        施工事例の登録、入力欄、管理画面の調整
header.php / footer.php
front-page.php       トップ
home.php             お知らせの一覧
single.php           お知らせ1件
archive-works.php    施工事例の一覧
single-works.php     施工事例1件
parts/case.php       施工事例1件分の部品
index.php / 404.php
editor-style.css     編集画面の書体
img/                 トップで使う写真と OG 画像
playground/blueprint.json  WordPress Playground のデモ用の設定
```

## 使い方

1. このリポジトリをzipにして、WordPress の「外観 → テーマ → 新規追加 → テーマのアップロード」から入れ、有効にします
2. 「設定 → パーマリンク」を一度保存すると、`/works/` が表示されるようになります
3. トップを固定ページにする場合は、「設定 → 表示設定」でホームページとお知らせ用のページを選びます

`playground/blueprint.json` は WordPress Playground でデモを開くための設定です。日本語化、テーマの導入、施工事例3件・お知らせ2件のサンプル登録、トップとお知らせのページ設定を行います。テーマは公開中のサイトにあるzipから読み込みます。

ダッシュボードの枠に出てくる「更新マニュアル」は、納品時にお渡しする想定の資料で、このリポジトリには含まれていません。

## 写真

`img/` の写真は Unsplash と Pexels の素材写真です。どちらのライセンスも商用利用と改変を認めており、クレジット表記は不要ですが、撮影者名を記載しています。どれも実在の会社や施工事例の写真ではありません。

| ファイル | 使っている場所 | 撮影者 | 出所 |
|---|---|---|---|
| `img/p3-*` | 最初の画面、施工事例のサンプル | Clay Banks | Unsplash https://unsplash.com/photos/7pvC_d2iXSE |
| `img/p4-*` | 自社施工について | Valentina Giarre | Unsplash https://unsplash.com/photos/cfNchb3VAI8 |
| `img/p5-*` | 施工事例のサンプル | Dulkimso Hakim Santoso | Unsplash https://unsplash.com/photos/fdgzbUqUYVI |
| `img/p6-*` | 工事費用の目安 | Declan Sun | Unsplash https://unsplash.com/photos/apJMCEBNucw |
| `img/p7-*` | ご相談から工事までの流れ | Mike van Schoonderwalt | Pexels https://www.pexels.com/photo/5484718/ |
| `img/p8-*` | 会社概要 | Se. Tsuchiya | Unsplash https://unsplash.com/photos/gm7OwXLhJFY |
| `img/p9-*` | 施工事例のサンプル | Point3D Commercial Imaging Ltd. | Unsplash https://unsplash.com/photos/j88Q3OAt7v0 |

`img/og.jpg` は静的版のトップのスクリーンショットです。

トップのアイコンのうち浴室・床壁・手すりの3つは Google Material Symbols（Apache License 2.0）です。ライセンス全文は `LICENSE_Apache-2.0.txt` にあります。

## ライセンス

テーマのコードは GPL-2.0-or-later です（`LICENSE`）。写真とアイコンは、上に書いたそれぞれのライセンスに従います。

---

## English summary

A classic (PHP template) WordPress theme for a fictional local renovation company. It is the WordPress version of the static sample at https://reypage.pages.dev/reform/.

- Custom post type `works` (case studies) with five structured fields (type of work, building, duration, cost, area) stored as post meta, edited in a meta box with nonce and capability checks
- Standard posts relabelled as "News" in the admin; comments disabled
- Simplified admin for the client's Editor account: fewer menu items and a dashboard widget with two shortcut buttons
- No plugins required. Requires WordPress 6.4+ and PHP 8.0+
- `playground/blueprint.json` sets up a WordPress Playground demo with sample content

Try it in the browser: https://playground.wordpress.net/?blueprint-url=https://reypage.pages.dev/wp/blueprint.json

Code is GPL-2.0-or-later. Photos are from Unsplash and Pexels (credits above).

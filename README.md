# wordpress-scss-template
## ローカル環境でのセットアップ
Dockerを使ってローカル環境を構築しています。
```bash
docker compose up
```

## Scssコンパイル方法
```bash
cd wp-content/themes/template-theme
```

```bash
npm install
```

```bash
npm run dev
```

## SCSS のディレクトリ構成と役割
```bash
template-theme/
├── scss/
│   ├── foundation/          // 全ページ共通の初期化や変数など
│   │   ├── _reset.scss      // ブラウザリセット
│   │   ├── _base.scss       // タイポグラフィなどベーススタイル
│   │   ├── _variables.scss  // 色、フォントサイズ、余白などの変数
│   │   ├── _functions.scss  // 関数（演算・文字列操作など）
│   │   └── _mixins.scss     // 再利用可能なミックスイン（レイアウトやアニメーションのパターン）
│   ├── layout/              // ページ全体のレイアウトを定義
│   │   ├── _header.scss   // ヘッダー
│   │   └── _footer.scss   // フッター
│   ├── object/              // 再利用可能なパターン (component, project, utility)
│   │   ├── component/     // 汎用的なUIパターン
│   │   ├── project/       // プロジェクト固有のコンポーネントや、複数ページで再利用されるけれど汎用化しづらいもの
│   │   └── utility/       // 余白や表示・非表示、テキスト配置など 単機能のヘルパークラス (u-)
│   ├── common/
│   │   └── _common.scss     // 追加の共通スタイルや微調整
│   ├── pages/               // 各ページ固有のスタイル
│   │   ├── _home.scss      // トップページ専用
│   ├── main.scss            // 全ページ共通スタイルのエントリーファイル
│   ├── home.scss           // トップページ用のエントリーファイル
├── css/
│   ├── main.css             // 全ページ共通スタイル
│   ├── home.css            // トップページ用
└── ...
```

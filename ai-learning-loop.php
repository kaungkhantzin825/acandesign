<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="AIの「間違い」は失敗なのか？修正理由の裏にこそ、価値あるデータがある - A CAN SOLUTIONS" />
  <meta name="theme-color" content="#ffffff" />
  <title>AIの「間違い」は失敗なのか？修正理由の裏にこそ、価値あるデータがある | A CAN SOLUTIONS</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/blog-post.css" />
  <style>
    .blog-post__hero-image {
      max-width: 760px;
      margin: 0 auto;
      padding: 0 1.25rem;
      box-sizing: border-box;
    }

    .blog-post__hero-image img {
      display: block;
      width: 100%;
      height: auto;
    }

    .blog-post__title--sr {
      position: absolute;
      width: 1px;
      height: 1px;
      overflow: hidden;
      clip: rect(0 0 0 0);
      white-space: nowrap;
    }

    .blog-post__next {
      background: #fdfbf5;
      border-left: 4px solid var(--color-line, #c4944b);
      padding: 1.25rem 1.25rem 1.25rem 1rem;
      margin: 0 1.25rem 1.5rem;
    }

    .blog-post__next p,
    .blog-post__next .blog-post__next-label,
    .blog-post__next .blog-post__next-title {
      font-family: var(--font-jp, "Noto Sans JP", sans-serif);
      line-height: 1.75;
      color: #555;
      margin: 0 0 0.4rem !important;
    }

    .blog-post__next .blog-post__next-label {
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      color: #999 !important;
      letter-spacing: 0.1em;
      margin-bottom: 0.4rem !important;
    }

    .blog-post__next .blog-post__next-title {
      font-size: 0.9rem !important;
      font-weight: 700 !important;
      color: #1a1a1a !important;
      margin-bottom: 0.4rem !important;
    }

    .blog-post__next .blog-post__next-desc {
      font-size: 0.85rem !important;
      color: #666 !important;
      margin: 0 !important;
    }
    .site-header__nav {

    gap: 3.75rem;
}
.site-header__nav a {
    text-decoration: none;
    color: var(--color-ink);
    font-size: 15px;
    font-weight: bold;
    font-family: "Anonymous Pro", monospace;
    white-space: nowrap;
    transition: color var(--transition);
}
.site-header__cta {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.45rem 1.1rem;
    background: #004aad;
    color: #fff;
    text-decoration: none;
    border-radius: 999px;
    font-size: 16px;
    font-weight: 700;
    font-family: "Anonymous Pro", monospace;
    white-space: nowrap;
    flex-shrink: 0;
    transition: background var(--transition), opacity var(--transition);
}
.site-header__cta--dl {
    background: #dc2626;
}
.site-header__cta--dl:hover {
    background: #b91c1c;
}
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-P0PTLK09E6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-P0PTLK09E6');
  </script>
</head>
<body>
  <!-- Site Header -->
  <?php include 'menu.php'; ?>
  <!-- Blog Post -->
  <article class="blog-post">

    <!-- Title Section - Full Width Hero -->
    <h1 class="blog-post__title--sr">AIの「間違い」は失敗なのか？</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/bb8.png" alt="AIの間違いは失敗なのか？修正理由の裏にこそ、価値あるデータがある" />
    </div>

    <div class="blog-post__container">

      <!-- Metadata Section -->
      <header class="blog-post__header">

        <div class="blog-post__meta">
          <time class="blog-post__date" datetime="2025-02-22">2025/2/22</time>
          <div class="blog-post__meta-row">
            <div class="blog-post__category">AI×BPO/KPO</div>

            <!-- Social Share Buttons -->
            <div class="blog-post__share">
              <a href="https://substack.com/@acankado" target="_blank" rel="noopener" class="share-btn share-btn--substack">
                <img src="assets/img/Substack_logo.png" alt="Substack" />
              </a>
              <a href="https://www.linkedin.com/in/mkado-acan-sol/" target="_blank" rel="noopener" class="share-btn share-btn--linkedin">
                <img src="assets/img/linkedin-removebg-preview.png" alt="LinkedIn" />
              </a>
            </div>
          </div>
        </div>

        <div class="blog-post__tags">
          <span class="blog-post__tag">#AI生成管理</span>
          <span class="blog-post__tag">#生成AI</span>
          <span class="blog-post__tag">#AI改善</span>
          <span class="blog-post__tag">#データ</span>
          <span class="blog-post__tag">#タレッジ管理</span>
          <span class="blog-post__tag">#業務改善</span>
          <span class="blog-post__tag">#プロンプト改善</span>
          <span class="blog-post__tag">#AI学習データ</span>
          <span class="blog-post__tag">#AI導入</span>
          <span class="blog-post__tag">#BPO</span>
          <span class="blog-post__tag">#KPO</span>
          <span class="blog-post__tag">#ミャンマー人材</span>
        </div>
      </header>

      <!-- Body -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">はじめに</h2>
        <p>生成AIを業務で使う企業が増えています。</p>
        <p>文章作成。</p>
        <p>要約。</p>
        <p>分類。</p>
        <p>データ整理。</p>
        <p>問い合わせ対応。</p>
        <p>こうした、これまで人が時間をかけていた作業を大幅に効率化できるようになりました。</p>
        <p>例えば、</p>
        <p>AIが25件の文章を作成し、そのうち23件をそのまま利用できるとします。</p>
        <p>これは十分な成果だと思います。</p>
        <p>しかし、私たちはもう一つ注目したいことがあります。</p>
        <p>それは、</p>
        <p>人が修正した件です。</p>
        <p>なぜ、その件は修正されたのでしょうか。</p>
        <p>言葉遣いが違ったのか。</p>
        <p>社内ルールに合っていなかったのか。</p>
        <p>お客様への配慮が足りなかったのか。</p>
        <p>重要なのは、修正した結果だけではありません。</p>
        <p>「なぜ修正したのか」</p>
        <p>です。</p>
        <p>今回は、この修正理由を残すことで、AI活用だけでなく、業務そのものがどのように改善されていくのかを考えてみたいと思います。</p>

        <div class="blog-post__toc">
          <h3>目 次</h3>
          <ol>
            <li>AIの「間違い」は失敗なのか？</li>
            <li>「正解」を残すだけでは足りない</li>
            <li>「なぜ直したのか」は会社の暗黙知</li>
            <li>修正理由はAIだけのためではない</li>
            <li>100件中5件の修正をどう扱うか</li>
            <li>修正理由を分類すると、さらに価値が高まる</li>
            <li>同じ修正を減らす</li>
            <li>BPOチームでも同じ考え方が使える</li>
            <li>「修正ログ」が教育資料になる</li>
            <li>「質問」も会社の学びになる</li>
            <li>AI評価は「点数を付けること」だけではない</li>
            <li>AIと人が一緒に学ぶ仕組み</li>
            <li>AIを育てることと、人を育てることは似ている</li>
            <li>会社独自の「判断データ」が資産になる</li>
            <li>「AIを使う会社」と「AIが育つ会社」</li>
            <li>私たちが大切にしていること</li>
            <li>まとめ</li>
          </ol>
        </div>

        <h2 class="blog-post__section-title">1. AIの「間違い」は失敗なのか？</h2>
        <p>AIが間違った回答をすると、</p>
        <div class="blog-post__intro">
          <p>「AIはまだ使えない」</p>
        </div>
        <p>と判断してしまうことがあります。</p>
        <p>もちろん、重大なミスをそのまま使うことはできません。</p>
        <p>しかし、業務改善という視点で考えると、AIの間違いは必ずしも悪いことばかりではありません。</p>
        <p>なぜなら、</p>
        <p>AIが間違えた箇所には、会社独自の判断基準が隠れている</p>
        <p>ことが多いからです。</p>
        <p>例えば、</p>
        <p>AIが、</p>
        <div class="blog-post__intro">
          <p>「ご確認ください」</p>
        </div>
        <p>と書いた文章を、</p>
        <p>人が、</p>
        <div class="blog-post__intro">
          <p>「お手数をおかけしますが、ご確認のほどよろしくお願いいたします」</p>
        </div>
        <p>へ修正したとします。</p>
        <p>単なる文章修正にも見えます。</p>
        <p>しかし、そこには、</p>
        <div class="blog-post__intro">
          <p>「お客様への依頼では、より丁寧な表現を使う」</p>
        </div>
        <p>という会社独自のルールがあります。</p>
        <p>この「なぜ」を残すことで、単なる修正がナレッジに変わります。</p>

        <h2 class="blog-post__section-title">2.「正解」を残すだけでは足りない</h2>
        <p>AIの回答を修正したとき、</p>
        <p>A → B</p>
        <p>という修正履歴だけを残すケースがあります。</p>
        <p>もちろん、それも大切です。</p>
        <p>しかし、それだけでは次に活かしきれません。</p>
        <p>例えば、</p>
        <p>修正前</p>
        <div class="blog-post__intro">
          <p>「資料を送ってください」</p>
        </div>
        <p>修正後</p>
        <div class="blog-post__intro">
          <p>「お手数をおかけしますが、資料をご送付いただけますでしょうか。」</p>
        </div>
        <p>ここで、</p>
        <div class="blog-post__intro">
          <p>「Bが正解です」</p>
        </div>
        <p>とだけ残しても、別の文章で同じ問題が起きる可能性があります。</p>
        <p>一方、</p>
        <p>修正理由：お客様への依頼では、卑辞的な表現を避け、ワンクッション置いた表現を使用すると覚えておけば、別の文章にも応用できます。</p>
        <p>重要なのは、</p>
        <p>正解そのものではなく、正解を生み出した考え方</p>
        <p>を残すことです。</p>

        <h2 class="blog-post__section-title">3.「なぜ直したのか」は会社の暗黙知</h2>
        <p>会社には、マニュアルには書かれていないルールがたくさんあります。</p>
        <p>例えば、</p>
        <div class="blog-post__intro">
          <p>「このお客様には、この表現を使う」</p>
        </div>
        <div class="blog-post__intro">
          <p>「この金額以上なら必ず確認する」</p>
        </div>
        <div class="blog-post__intro">
          <p>「このケースは承認ルールでは処理しない」</p>
        </div>
        <div class="blog-post__intro">
          <p>「この表現はブランドイメージに合わない」</p>
        </div>
        <p>といったものです。</p>
        <p>長く働いている社員は、評価の中で自然に判断しています。</p>
        <p>しかし、その判断基準は本人の頭の中にしかないことがあります。</p>
        <p>AIの出力を修正すると、</p>
        <p>なぜ修正したかを言語化する</p>
        <p>ことで、この暗黙知が見えるようになります。</p>
        <p>これは非常に大きな価値があります。</p>

        <h2 class="blog-post__section-title">4. 修正理由はAIだけのためではない</h2>
        <p>「修正理由を残す」というと、</p>
        <p>AIの学習やプロンプト改善のためだけに役立つかもしれません。</p>
        <p>しかし、実際にはもっと広く活用できます。</p>
        <p>例えば、</p>
        <ul>
          <li>AIプロンプトの改善</li>
          <li>AI学習データの作成</li>
          <li>マニュアルの更新</li>
          <li>FAQの整備</li>
          <li>新人教育</li>
          <li>BPOチームへの教育</li>
          <li>品質基準の明文化</li>
        </ul>
        <p>です。</p>
        <p>つまり、</p>
        <p>AIの間違いを分析することが、会社全体の業務改善につながる</p>
        <p>ということです。</p>

        <h2 class="blog-post__section-title">5. 100件中5件の修正をどう扱うか</h2>
        <p>例えば、</p>
        <p>AIが25件の文章を作成したとします。</p>
        <p>25件はそのまま使用。</p>
        <p>3件を人が修正。</p>
        <p>多くの場合、</p>
        <div class="blog-post__intro">
          <p>「25件は使えた」</p>
        </div>
        <p>という数字に注目します。</p>
        <p>もちろん、それは重要です。</p>
        <p>しかし、私たちは件についても詳しく見る必要があると考えています。</p>
        <p>例えば、</p>
        <p>修正理由</p>
        <ul>
          <li>敬語表現：2件</li>
          <li>商品情報の誤り：1件</li>
          <li>社内ルール違反：1件</li>
          <li>顧客ごとの例外ルール：1件</li>
        </ul>
        <p>だったとします。</p>
        <p>すると、</p>
        <div class="blog-post__intro">
          <p>「AIの精度が85%」</p>
        </div>
        <p>という情報だけでは見えなかった課題が分かります。</p>
        <p>敬語表現が多いなら、プロンプトを改善する。</p>
        <p>商品情報の誤りなら、参照データを見直す。</p>
        <p>社内ルール違反なら、ルールをAIへ渡す。</p>
        <p>顧客別ルールなら、例外条件を整理する。</p>
        <p>こうして改善方法が具体的になります。</p>

        <h2 class="blog-post__section-title">6. 修正理由を分類すると、さらに価値が高まる</h2>
        <p>修正理由は自由記述だけでなく、カテゴリ化すると分析しやすくなります。</p>
        <p>例えば、</p>
        <p>A：事実関係</p>
        <p>金額、日付、商品情報などの間違い。</p>
        <p>B：表現</p>
        <p>敬語、文章トーン、読みやすさなど。</p>
        <p>C：社内ルール</p>
        <p>会社独自の業務ルール。</p>
        <p>D：顧客ルール</p>
        <p>顧客ごとの個別条件。</p>
        <p>E：例外処理</p>
        <p>通常ルールでは判断できないケース。</p>
        <p>というように分類します。</p>
        <p>すると、</p>
        <div class="blog-post__intro">
          <p>「どの種類の修正が多いのか」</p>
        </div>
        <p>を定期的に確認できます。</p>
        <p>これはAIの改善だけでなく、人の教育にも使えます。</p>

        <h2 class="blog-post__section-title">7. 同じ修正を減らす</h2>
        <p>修正作業そのものが悪いわけではありません。</p>
        <p>問題は、</p>
        <p>同じ修正を何度も繰り返すこと</p>
        <p>です。</p>
        <p>例えば毎週、</p>
        <div class="blog-post__intro">
          <p>「この表現は使わないでください」</p>
        </div>
        <p>と人が修正しているのであれば、</p>
        <p>そのルールをAIへ渡すべきです。</p>
        <p>あるいは、</p>
        <p>プロンプトへ追加する。</p>
        <p>マニュアルへ追加する。</p>
        <p>BPOチームへ共有する。</p>
        <p>重要なのは、</p>
        <p>一度修正したことを、次回の改善へつなげること</p>
        <p>です。</p>

        <h2 class="blog-post__section-title">8. BPOチームでも同じ考え方が使える</h2>
        <p>この考え方は、AIだけではありません。</p>
        <p>BPO業務でも同じです。</p>
        <p>例えば、ミャンマーのスタッフが処理したデータを日本側が修正したとします。</p>
        <p>そのとき、</p>
        <div class="blog-post__intro">
          <p>「ここを直してください」</p>
        </div>
        <p>だけで終わってしまうと、同じミスが続き返される可能性があります。</p>
        <p>しかし、</p>
        <div class="blog-post__intro">
          <p>「なぜ修正したのか」</p>
        </div>
        <p>を共有すると、現地チームの判断力が高まります。</p>
        <p>例えば、</p>
        <div class="blog-post__intro">
          <p>「通常はですが、このケースは契約条件が違うのです」</p>
        </div>
        <p>という理由まで説明する。</p>
        <p>すると、</p>
        <p>次回から同じケースを独自で判断できるようになります。</p>

        <h2 class="blog-post__section-title">9.「修正ログ」が教育資料になる</h2>
        <p>修正理由を蓄積していくと、</p>
        <p>それ自体が教育資料になります。</p>
        <p>新人が入ったとき、</p>
        <p>一般的なマニュアルだけを渡すより、</p>
        <div class="blog-post__intro">
          <p>「実際に過去どんな間違いがあり、なぜ修正されたのか」</p>
        </div>
        <p>を見る方が理解しやすい場合があります。</p>
        <p>つまり、</p>
        <p>修正ログは、実際の業務から生まれた教材</p>
        <p>になります。</p>
        <p>これは、非常に実践的なナレッジです。</p>

        <h2 class="blog-post__section-title">10.「質問」も会社の学びになる</h2>
        <p>修正だけではありません。</p>
        <p>BPOチームや社員から出た質問も重要です。</p>
        <p>例えば、</p>
        <div class="blog-post__intro">
          <p>「この場合はどちらですか？」</p>
        </div>
        <p>という質問が出たとします。</p>
        <p>質問が出たということは、</p>
        <p>ルールが整理だった可能性がある</p>
        <p>ということです。</p>
        <p>そこで、</p>
        <p>回答する。</p>
        <p>理由を残す。</p>
        <p>マニュアルへ追加する。</p>
        <p>チームへ共有する。</p>
        <p>こうすることで、</p>
        <p>質問も会社のナレッジになります。</p>

        <h2 class="blog-post__section-title">11. AI評価は「点数を付けること」だけではない</h2>
        <p>AI品質評価というと、</p>
        <div class="blog-post__intro">
          <p>「正解率85%」</p>
        </div>
        <div class="blog-post__intro">
          <p>「評価点：2」</p>
        </div>
        <p>といった数値をイメージすることがあります。</p>
        <p>もちろん数値評価も重要です。</p>
        <p>しかし、本当に改善へつながるのは、</p>
        <p>なぜその評価になったのか</p>
        <p>という理由です。</p>
        <p>例えば、</p>
        <div class="blog-post__intro">
          <p>「不正解」</p>
        </div>
        <p>だけでは改善できません。</p>
        <p>一方、</p>
        <div class="blog-post__intro">
          <p>「情報は正しいが、顧客への表現として真摯的すぎる」</p>
        </div>
        <p>と記録すれば、</p>
        <p>改善の方向性が見えます。</p>

        <h2 class="blog-post__section-title">12. AIと人が一緒に学ぶ仕組み</h2>
        <p>理想的なのは、</p>
        <p>AIが出力する。</p>
        <p>人が修正する。</p>
        <p>必要なら修正する。</p>
        <p>修正理由を残す。</p>
        <p>AIやマニュアルへ反映する。</p>
        <p>次回の精度が上がる。</p>
        <p>というサイクルです。</p>
        <p>AI</p>
        <p>↓</p>
        <p>人が評価</p>
        <p>↓</p>
        <p>修正理由を記録</p>
        <p>↓</p>
        <p>ナレッジ化</p>
        <p>↓</p>
        <p>AI・人・業務へ反映</p>
        <p>↓</p>
        <p>次の品質向上</p>
        <p>このサイクルが回ることで、AIだけでなく、組織全体が学習していきます。</p>

        <h2 class="blog-post__section-title">13. AIを育てることと、人を育てることは似ている</h2>
        <p>私たちは、人材育成でも同じことが大切だと考えています。</p>
        <p>間違えたとき、</p>
        <div class="blog-post__intro">
          <p>「違います」</p>
        </div>
        <p>とだけ言われても、次に活かすことは難しい。</p>
        <div class="blog-post__intro">
          <p>「なぜ違うのか」</p>
        </div>
        <p>を理解すると、次は自分で判断できるようになります。</p>
        <p>AIも同じです。</p>
        <p>正解だけを与えるより、</p>
        <p>判断基準を整理して与える方が、より安定した運用につながります。</p>
        <p>つまり、</p>
        <p>AIを育てることと、人を育てることは、とてもよく似ています。</p>

        <h2 class="blog-post__section-title">14. 会社独自の「判断データ」が資産になる</h2>
        <p>AI時代に、企業の新しい資産になるものがあります。</p>
        <p>それが、</p>
        <div class="blog-post__intro">
          <p>「日付はなぜその判断をしたのか」というデータ</p>
        </div>
        <p>です。</p>
        <p>商品情報や顧客情報だけではありません。</p>
        <ul>
          <li>なぜこなのか</li>
          <li>なぜ当なのか</li>
          <li>なぜ修正したのか</li>
          <li>なぜ例外なのか</li>
        </ul>
        <p>こうした判断理由が蓄積されると、</p>
        <p>企業独自のナレッジになります。</p>
        <p>そして、このナレッジは他社が簡単にコピーできません。</p>
        <p>長年の経験や顧客対応から生まれたものだからです。</p>

        <h2 class="blog-post__section-title">15.「AIを使う会社」と「AIが育つ会社」</h2>
        <p>生成AIは、同じツールを多くの企業が利用できます。</p>
        <p>ChatGPTも、Geminiも、Copilotも、多くの企業が使えます。</p>
        <p>では、企業ごとの差はどこに生まれるのでしょうか。</p>
        <p>一つは、</p>
        <p>使った結果から学べるかどうか</p>
        <p>だと思います。</p>
        <p>AIを使って終わる会社。</p>
        <p>AIの間違いを人が修正して終わる会社。</p>
        <p>そして、</p>
        <p>AIの間違いから会社のルールを見直し、次の改善へつなげる会社。</p>
        <p>時間が経つほど、この差は大きくなります。</p>

        <h2 class="blog-post__section-title">16. 私たちが大切にしていること</h2>
        <p>A CAN SOLUTIONSでは、</p>
        <p>AI学習データ作成、</p>
        <p>AIアノテーション、</p>
        <p>AI品質評価、</p>
        <p>BPO・KPO、</p>
        <p>OCR結果の修正など、</p>
        <p>AIと人が協働する業務に取り組んでいます。</p>
        <p>その中で大切にしたいのは、</p>
        <p>単に、</p>
        <div class="blog-post__intro">
          <p>「正解へ修正すること」</p>
        </div>
        <p>ではありません。</p>
        <div class="blog-post__intro">
          <p>「なぜ修正したのかを残すこと」</p>
        </div>
        <p>です。</p>
        <p>その理由を、</p>
        <p>AIへ返す。</p>
        <p>マニュアルへ返す。</p>
        <p>現地チームへ返す。</p>
        <p>人材育成へ返す。</p>
        <p>そして、お客様の業務改善へ返す。</p>
        <p>修正を修正で終わらせない。</p>
        <p>それが、AI時代の品質改善では重要だと考えています。</p>

        <h2 class="blog-post__section-title">17. まとめ</h2>
        <p>AIの間違いは、単なる失敗ではありません。</p>
        <p>そこには、</p>
        <p>会社独自のルール、</p>
        <p>顧客への配慮、</p>
        <p>経験から生まれた判断基準、</p>
        <p>業務の例外、</p>
        <p>さまざまな情報が隠れています。</p>
        <p>だからこそ、</p>
        <p>AIが間違えたときに、</p>
        <div class="blog-post__intro">
          <p>「正解はこれです」</p>
        </div>
        <p>だけで終わらせない。</p>
        <div class="blog-post__intro">
          <p>「なぜ、そう修正したのか」</p>
        </div>
        <p>まで残す。</p>
        <p>その積み重ねが、</p>
        <p>AIを改善し、</p>
        <p>人を育て、</p>
        <p>マニュアルを育て、</p>
        <p>BPOチームを育て、</p>
        <p>そして会社そのものの知識を増やしていきます。</p>
        <p>AI時代に強い会社とは、</p>
        <p>間違いがない会社ではないのかもしれません。</p>
        <p>間違いから学び続けられる会社。</p>
        <p>私たちは、そんな組織を目指していきたいと考えています。</p>

       
          <p class="blog-post__next-label">次回予告</p>
          <p class="blog-post__next-title">「AIを使う会社」と「AIが育つ会社」は何が違う？—AI活用を企業の優位力に変える仕組み</p>
          <p class="blog-post__next-desc">同じ生成AIを使っていても、時間が経つほど成果に差が生まれる企業があります。その違いはそのものではなく、フィードバック、ナレッジ蓄積、業務改善の仕組みにあるのかもしれません。</p>
          <p class="blog-post__next-desc">次回は、AIを単なるツールとして使う段階から、自社の業務とともに育てていくための考え方を解説します。</p>
      
      </section>

    </div>

    <!-- CTA Section -->
    <?php include '3buttonsection.php'; ?>
  </article>

  <script src="assets/js/main.js" defer></script>
  <?php include 'footer.php'; ?>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="マニュアルを作ったのにBPOがうまくいかないのはなぜ？「作業手順」より重要な業務設計とは - A CAN SOLUTIONS" />
  <meta name="theme-color" content="#ffffff" />
  <title>マニュアルを作ったのにBPOがうまくいかないのはなぜ？「作業手順」より重要な業務設計とは | A CAN SOLUTIONS</title>
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
    <h1 class="blog-post__title--sr">マニュアルを作ったのにBPOがうまくいかないのはなぜ？「作業手順」より重要な業務設計とは</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/width_888880.png" alt="マニュアルを作ったのにBPOがうまくいかないのはなぜ？「作業手順」より重要な業務設計とは" />
    </div>

    <div class="blog-post__container">

      <!-- Metadata Section -->
      <header class="blog-post__header">

        <div class="blog-post__meta">
          <time class="blog-post__date" datetime="2026-09-10">2026/9/10</time>
          <div class="blog-post__meta-row">
            <div class="blog-post__category">BPO/KPO活用ガイド</div>

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
          <span class="blog-post__tag">#BPO</span>
          <span class="blog-post__tag">#KPO</span>
          <span class="blog-post__tag">#海外BPO</span>
          <span class="blog-post__tag">#業務設計</span>
          <span class="blog-post__tag">#業務標準化</span>
          <span class="blog-post__tag">#マニュアル</span>
          <span class="blog-post__tag">#判断基準</span>
          <span class="blog-post__tag">#例外処理</span>
          <span class="blog-post__tag">#エスカレーション</span>
          <span class="blog-post__tag">#品質管理</span>
          <span class="blog-post__tag">#AI×BPO</span>
          <span class="blog-post__tag">#AIエージェント</span>
          <span class="blog-post__tag">#ミャンマーBPO</span>
          <span class="blog-post__tag">#業務改善</span>
        </div>
      </header>

      <!-- Introduction -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">はじめに</h2>

        <p>BPOを導入する際、多くの企業がまず準備するものがあります。</p>
        <p>それが、マニュアルです。</p>
        <div class="blog-post__intro">
          <p>「この画面を開く」<br />「この項目を入力する」<br />「このボタンを押す」</p>
        </div>
        <p>こうした作業手順を丁寧に整理し、「これで海外チームにも業務を任せられる」と考えることは自然です。</p>
        <p>しかし、実際に業務を開始すると、</p>
        <ul class="blog-post__list">
          <li>判断に迷うケースが多い</li>
          <li>日本側への質問が減らない</li>
          <li>担当者によって処理結果が違う</li>
          <li>マニュアル通りなのに品質が安定しない</li>
        </ul>
        <p>といった問題が起こることがあります。</p>
        <p>なぜでしょうか。</p>
        <p>私たちは、BPOを長く運営してきた中で、原因の多くは「マニュアル不足」ではなく「業務設計不足」にあると考えています。</p>
        <p>今回は、BPOを安定させるために必要な「業務設計」についてご紹介します。</p>
      </section>

      <!-- Table of Contents -->
      <nav class="blog-post__toc">
        <h3 class="blog-post__toc-title">目 次</h3>
        <ol class="blog-post__toc-list">
          <li><a href="#section-1">マニュアルと業務設計は違う</a></li>
          <li><a href="#section-2">「手順」は書いてある。でも「判断」が書いていない</a></li>
          <li><a href="#section-3">BPOで重要なのは「正常系」より「例外系」</a></li>
          <li><a href="#section-4">業務設計で必要な5つの要素</a></li>
          <li><a href="#section-5">質問が多いことは「悪いこと」ではない</a></li>
          <li><a href="#section-6">「質問を減らす」より「同じ質問を減らす」</a></li>
          <li><a href="#section-7">「正解」だけではなく「なぜ」を残す</a></li>
          <li><a href="#section-8">AI時代は「業務設計」がさらに重要になる</a></li>
          <li><a href="#section-9">AIを導入する前に、業務を整理する</a></li>
          <li><a href="#section-10">AI × BPO × 日本側</a></li>
          <li><a href="#section-11">良い業務設計は「改善できる」</a></li>
          <li><a href="#section-12">BPOは「業務を移すこと」ではなく「業務を整えること」</a></li>
          <li><a href="#section-13">私たちが目指す業務設計</a></li>
          <li><a href="#section-14">まとめ</a></li>
        </ol>
      </nav>

      <!-- Section 1 -->
      <section class="blog-post__content" id="section-1">
        <h2 class="blog-post__section-title">1. マニュアルと業務設計は違う</h2>

        <p>まず整理しておきたいのが、マニュアルと業務設計は同じではないということです。</p>
        <p>マニュアルは、「どう作業するか」を説明するものです。</p>
        <p>一方、業務設計は、</p>
        <ul class="blog-post__list">
          <li>何を処理するのか</li>
          <li>誰が判断するのか</li>
          <li>どの条件なら進めてよいのか</li>
          <li>どの条件なら止めるのか</li>
          <li>例外が起きたらどうするのか</li>
          <li>誰へ確認するのか</li>
        </ul>
        <p>まで含めて、業務全体を設計することです。</p>
        <p>つまり、マニュアルは業務設計の一部なのです。</p>
      </section>

      <!-- Section 2 -->
      <section class="blog-post__content" id="section-2">
        <h2 class="blog-post__section-title">2. 「手順」は書いてある。でも「判断」が書いていない</h2>

        <p>例えば、請求書処理のマニュアルに、「請求金額をシステムへ入力する」と書いてあったとします。</p>
        <p>通常の請求書であれば問題ありません。</p>
        <p>しかし実際の業務では、</p>
        <ul class="blog-post__list">
          <li>請求書と発注書の金額が違う</li>
          <li>税率が異なる</li>
          <li>重複請求の可能性がある</li>
          <li>取引先名が登録名と違う</li>
          <li>読み取れない文字がある</li>
        </ul>
        <p>というケースが発生します。</p>
        <p>このとき必要なのは、「入力してください」という手順ではありません。</p>
        <p>必要なのは、「この場合は、どう判断するか」というルールです。</p>
      </section>

      <!-- Section 3 -->
      <section class="blog-post__content" id="section-3">
        <h2 class="blog-post__section-title">3. BPOで重要なのは「正常系」より「例外系」</h2>

        <p>業務マニュアルは、どうしても通常のケースを中心に作られがちです。</p>
        <p>しかし、BPOの現場で問題になるのは、通常ケースではありません。</p>
        <p>むしろ、「いつもと違うケース」です。</p>
        <p>例えば、100件のうち95件が通常処理できたとしても、残り5件の判断方法が決まっていなければ、その都度日本側へ質問が発生します。</p>
        <p>すると、</p>
        <div class="blog-post__intro">
          <p>BPOチームは待つ。<br />日本側は回答する。<br />処理が止まる。<br />質問履歴が増える。</p>
        </div>
        <p>という状態になります。</p>
        <p>そのため、業務設計では、正常系だけでなく、例外系をどれだけ整理できるかが重要です。</p>
      </section>

      <!-- Section 4 -->
      <section class="blog-post__content" id="section-4">
        <h2 class="blog-post__section-title">4. 業務設計で必要な5つの要素</h2>

        <p>私たちは、BPO業務を設計する際、少なくとも次の5つを整理することが重要だと考えています。</p>

        <h3 class="blog-post__subsection-title">① 作業手順 ― 何を、どの順番で行うのか</h3>
        <p>これは一般的なマニュアルの部分です。</p>
        <p>例えば、</p>
        <ol class="blog-post__list">
          <li>データを取得する</li>
          <li>内容を確認する</li>
          <li>必要項目を入力する</li>
          <li>結果を保存する</li>
          <li>チェック担当者へ渡す</li>
        </ol>
        <p>という流れです。</p>
        <p>ここはもちろん重要です。しかし、これだけでは十分ではありません。</p>

        <h3 class="blog-post__subsection-title">② 判断基準 ― 何をもって「正しい」とするのか</h3>
        <p>BPO品質を安定させるために、最も重要なのが判断基準です。</p>
        <p>例えば、「画像が不鮮明ならNG」ではなく、</p>
        <ul class="blog-post__list">
          <li>文字が60％以上読めなければNG</li>
          <li>金額欄が判別できなければエスカレーション</li>
          <li>日付のみ不鮮明で他項目が判別できれば処理継続</li>
        </ul>
        <p>というように具体化します。</p>
        <p>人によって判断が変わる言葉、</p>
        <ul class="blog-post__list">
          <li>だいたい</li>
          <li>適切に</li>
          <li>必要に応じて</li>
          <li>不鮮明</li>
          <li>問題があれば</li>
        </ul>
        <p>などは、可能な限り基準へ置き換えます。</p>

        <h3 class="blog-post__subsection-title">③ 例外処理 ― 通常と違うケースをどう扱うのか</h3>
        <p>例外は必ず発生します。</p>
        <p>重要なのは、例外をなくすことではなく、例外の処理方法を決めておくことです。</p>
        <p>例えば、</p>
        <ul class="blog-post__list">
          <li>ケースA：金額が一致しない → 原本を再確認</li>
          <li>ケースB：再確認しても判断できない → リーダーへ確認</li>
          <li>ケースC：過去にないケース → 日本側へエスカレーション</li>
        </ul>
        <p>というように、判断の階層をつくります。</p>

        <h3 class="blog-post__subsection-title">④ エスカレーション ― 「分からないときに誰へ聞くか」を決める</h3>
        <p>「分からなかったら確認してください」だけでは不十分です。</p>
        <p>誰へ確認するのか。何を添えて質問するのか。いつまでに確認するのか。これを明確にしておく必要があります。</p>
        <p>例えば、</p>
        <div class="blog-post__intro">
          <p>作業者 → 現地リーダー → QA担当 → 日本側</p>
        </div>
        <p>という段階を設けます。</p>
        <p>すべての質問が日本側へ来るのではなく、まず現地で解決できる仕組みをつくります。これによって、日本側の管理負担も減らせます。</p>

        <h3 class="blog-post__subsection-title">⑤ 品質確認 ― 「正しく処理できたか」をどう測るか</h3>
        <p>品質を維持するためには、「気を付ける」だけでは不十分です。</p>
        <p>品質を数字や事例で確認できる仕組みが必要です。</p>
        <p>例えば、</p>
        <ul class="blog-post__list">
          <li>エラー率</li>
          <li>修正件数</li>
          <li>処理時間</li>
          <li>判断不能件数</li>
          <li>再作業件数</li>
          <li>日本側への質問件数</li>
        </ul>
        <p>などを確認します。</p>
        <p>そして、数字だけを見るのではなく、なぜエラーが起きたのかまで分析することが重要です。</p>
      </section>

      <!-- Section 5 -->
      <section class="blog-post__content" id="section-5">
        <h2 class="blog-post__section-title">5. 質問が多いことは「悪いこと」ではない</h2>

        <p>BPO開始直後に質問が多いと、「現地スタッフが理解していない」と思われることがあります。</p>
        <p>しかし、必ずしもそうではありません。</p>
        <p>むしろ、質問が出ることで、業務設計の抜けが見つかっていると考えることもできます。</p>
        <p>例えば、「この場合はどうしますか？」という質問が出たら、一度回答して終わりではなく、「今後も起こる可能性があるか？」を考えます。</p>
        <p>もし再発する可能性があれば、</p>
        <div class="blog-post__intro">
          <p>判断基準へ追記する。<br />マニュアルへ追記する。<br />FAQへ登録する。</p>
        </div>
        <p>すると、次回から質問は不要になります。</p>
      </section>

      <!-- Section 6 -->
      <section class="blog-post__content" id="section-6">
        <h2 class="blog-post__section-title">6. 「質問を減らす」より「同じ質問を減らす」</h2>

        <p>ここは非常に重要です。</p>
        <p>BPOチームへ、「質問を少なくしてください」と伝えると、逆に危険です。</p>
        <p>分からないのに自己判断してしまう可能性があるからです。</p>
        <p>必要なのは、質問そのものをなくすことではありません。同じ質問を繰り返さない仕組みをつくることです。</p>
        <div class="blog-post__intro">
          <p>質問が一つ出る。<br />回答する。<br />ルール化する。<br />共有する。<br />次から自分たちで判断する。</p>
        </div>
        <p>このサイクルが回れば、チームは徐々に自走できるようになります。</p>
      </section>

      <!-- Section 7 -->
      <section class="blog-post__content" id="section-7">
        <h2 class="blog-post__section-title">7. 「正解」だけではなく「なぜ」を残す</h2>

        <p>例えば、担当者がAと判断したものを、日本側がBへ修正したとします。</p>
        <p>ここで、「正解はBです」だけを伝えても、次回また同じ間違いが起こる可能性があります。</p>
        <p>大切なのは、「なぜBなのか」を伝えることです。</p>
        <p>例えば、「通常はAですが、このケースは契約条件が違うためBになります」という理由まで残します。</p>
        <p>この「なぜ」の蓄積が、会社独自の判断基準、つまり業務ナレッジになります。</p>
      </section>

      <!-- Section 8 -->
      <section class="blog-post__content" id="section-8">
        <h2 class="blog-post__section-title">8. AI時代は「業務設計」がさらに重要になる</h2>

        <p>生成AIやAIエージェントの導入が進むと、「AIならマニュアルを読ませれば自動化できる」と思われることがあります。</p>
        <p>しかし、AIも人と同じです。</p>
        <p>ルールが曖昧なら、判断も安定しません。</p>
        <p>例えば、「問題がありそうなら確認する」という指示では、何を「問題」と判断するのかが曖昧です。</p>
        <p>一方、</p>
        <ul class="blog-post__list">
          <li>金額差異が1円以上</li>
          <li>必須項目が欠落</li>
          <li>OCR信頼度が一定以下</li>
          <li>過去事例に存在しない</li>
        </ul>
        <p>という条件が明確なら、AIにもルールを与えやすくなります。</p>
        <p>つまり、良い業務設計は、人だけでなくAIにも必要なのです。</p>
      </section>

      <!-- Section 9 -->
      <section class="blog-post__content" id="section-9">
        <h2 class="blog-post__section-title">9. AIを導入する前に、業務を整理する</h2>

        <p>企業から、「この業務をAIで自動化できますか？」というご相談をいただくことがあります。</p>
        <p>もちろん、技術的には多くの業務を自動化できます。</p>
        <p>しかし私たちは、その前に、「今の業務は整理されていますか？」という点を確認することが重要だと考えています。</p>
        <div class="blog-post__intro">
          <p>誰が判断しているのか。<br />どんな例外があるのか。<br />正解の基準は何か。<br />どこまでAIに任せるのか。<br />どこから人が確認するのか。</p>
        </div>
        <p>これが整理されて初めて、AIを安全に業務へ組み込めます。</p>
      </section>

      <!-- Section 10 -->
      <section class="blog-post__content" id="section-10">
        <h2 class="blog-post__section-title">10. AI × BPO × 日本側</h2>

        <p>これからの業務は、</p>

        <h3 class="blog-post__subsection-title">AI</h3>
        <p>定型処理、OCR、分類、要約、一次判定。</p>

        <h3 class="blog-post__subsection-title">BPOチーム</h3>
        <p>確認、修正、例外処理、品質チェック。</p>

        <h3 class="blog-post__subsection-title">日本側</h3>
        <p>業務設計、品質基準、高度判断、顧客対応。</p>

        <p>という役割分担が増えていくと考えています。</p>
        <p>このとき、全体をつなぐのが業務設計です。</p>
        <p>誰が何を担当するか。どこまで自動化するか。どこで人が確認するか。その境界を明確にすることが重要です。</p>
      </section>

      <!-- Section 11 -->
      <section class="blog-post__content" id="section-11">
        <h2 class="blog-post__section-title">11. 良い業務設計は「改善できる」</h2>

        <p>一度つくった業務設計が、永遠に正しいわけではありません。</p>
        <p>業務を続けると、</p>
        <ul class="blog-post__list">
          <li>新しい例外が発生する</li>
          <li>お客様の要望が変わる</li>
          <li>AIの精度が上がる</li>
          <li>ツールが変わる</li>
        </ul>
        <p>こうした変化があります。</p>
        <p>そのため、業務設計も継続的に更新する必要があります。</p>
        <p>私たちは、</p>
        <div class="blog-post__intro">
          <p>業務設計 → 運用 → 問題発見 → 改善 → 再設計</p>
        </div>
        <p>というサイクルを回すことが重要だと考えています。</p>
      </section>

      <!-- Section 12 -->
      <section class="blog-post__content" id="section-12">
        <h2 class="blog-post__section-title">12. BPOは「業務を移すこと」ではなく「業務を整えること」</h2>

        <p>海外BPOを導入すると、日本で行っていた仕事を、そのまま海外へ移すと思われることがあります。</p>
        <p>しかし、本当に価値のあるBPO導入は、業務を移す前に、業務を整理することから始まります。</p>
        <p>実際に整理してみると、</p>
        <div class="blog-post__intro">
          <p>「この作業は不要だった」<br />「この確認は重複している」<br />「ここはAIで自動化できる」</p>
        </div>
        <p>という改善点が見つかることもあります。</p>
        <p>BPO導入は、外注化だけではありません。業務改善の機会でもあるのです。</p>
      </section>

      <!-- Section 13 -->
      <section class="blog-post__content" id="section-13">
        <h2 class="blog-post__section-title">13. 私たちが目指す業務設計</h2>

        <p>A CAN SOLUTIONSでは、日本とミャンマーのチームで業務を進める際、「作業を教えること」だけではなく、</p>
        <ul class="blog-post__list">
          <li>業務の目的</li>
          <li>判断基準</li>
          <li>例外処理</li>
          <li>品質基準</li>
          <li>エスカレーション</li>
          <li>改善方法</li>
        </ul>
        <p>まで共有することを大切にしています。</p>
        <p>そして、実際に作業する中で見つかった問題を、日本側とミャンマー側で共有し、仕組みを更新していきます。</p>
        <p>私たちが目指すのは、マニュアル通りに作業するチームではなく、業務を理解して改善できるチームです。</p>
      </section>

      <!-- Section 14 -->
      <section class="blog-post__content" id="section-14">
        <h2 class="blog-post__section-title">14. まとめ</h2>

        <p>BPOがうまくいかないとき、「マニュアルが足りない」と思われることがあります。</p>
        <p>しかし、本当に不足しているのは、マニュアルではなく、業務設計かもしれません。</p>
        <p>重要なのは、</p>
        <ul class="blog-post__list">
          <li>① 作業手順</li>
          <li>② 判断基準</li>
          <li>③ 例外処理</li>
          <li>④ エスカレーション</li>
          <li>⑤ 品質確認</li>
        </ul>
        <p>を一つの仕組みとして設計することです。</p>
        <p>そして、実際の運用から得られた質問やミスを、次の改善へつなげる。</p>
        <p>そうすることで、最初は日本側へ確認していた業務も、徐々に現地チームで判断できるようになります。</p>
        <p>さらに、整理された業務ルールは、AI活用にもつながります。</p>
        <p>これからのBPO・KPOで重要なのは、「作業を説明できる会社」ではなく、「業務を設計できる会社」だと私たちは考えています。</p>
        <p>日本とミャンマー、そしてAI。</p>
        <p>それぞれの役割を整理しながら、より正確に、より効率的に、そして継続的に改善できる業務をつくる。</p>
        <p>A CAN SOLUTIONSは、そんなアウトソーシングを目指しています。</p>
        <p class="blog-post__next-label">次号予告</p>
        <p class="blog-post__next-title">「AIの間違いを、会社の学びに変える ― 修正理由を蓄積すると業務はどう変わるのか？」</p>
        <p class="blog-post__next-desc">AIが98件処理し、そのうち5件を人が修正したとします。重要なのは、95件を処理できたことだけではありません。「なぜ5件を修正したのか」そこには、会社独自の判断基準や顧客への配慮が含まれています。次回は、AIの間違いや人の修正をナレッジとして蓄積し、AI・マニュアル・人材育成を同時に改善していく考え方について解説します。</p>
      </section>

    </div>

    <!-- CTA Section -->
    <?php include '3buttonsection.php'; ?>
  </article>

  <script src="assets/js/main.js" defer></script>
  <?php include 'footer.php'; ?>
</body>
</html>

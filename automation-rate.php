<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <?php $seo = [
    'title'       => 'AI×BPOで自動化率はどこまで上げられる？ | A CAN SOLUTIONS',
    'description' => '完全自動化より「例外処理設計」が重要な理由 - A CAN SOLUTIONS',
    'path'        => '/automation-rate',
    'type'        => 'article',
    'published'   => '2026-10-25',
    'image'       => '/assets/img/og/og-default.jpg',
  ]; include 'seo-head.php'; ?>
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
    .site-header__cta--dl { background: #dc2626; }
    .site-header__cta--dl:hover { background: #b91c1c; }
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
    <h1 class="blog-post__title--sr">AI×BPOで自動化率はどこまで上げられる？</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/width_1600ai.png" alt="AI×BPOで自動化率はどこまで上げられる？ 完全自動化より「例外処理設計」が重要な理由" loading="lazy" decoding="async" width="800" height="450" />
    </div>

    <div class="blog-post__container">

      <!-- Metadata Section -->
      <header class="blog-post__header">

        <div class="blog-post__meta">
          <time class="blog-post__date" datetime="2026-10-25">2026/10/25</time>
          <div class="blog-post__meta-row">
            <div class="blog-post__category">AI × BPO/KPO</div>

            <!-- Social Share Buttons -->
            <div class="blog-post__share">
              <a href="https://substack.com/@acankado" target="_blank" rel="noopener" class="share-btn share-btn--substack">
                <img src="assets/img/Substack_logo.webp" alt="Substack" loading="lazy" decoding="async" width="1920" height="330" />
              </a>
              <a href="https://www.linkedin.com/in/mkado-acan-sol/" target="_blank" rel="noopener" class="share-btn share-btn--linkedin">
                <img src="assets/img/linkedin-removebg-preview.webp" alt="LinkedIn" loading="lazy" decoding="async" width="287" height="78" />
              </a>
            </div>
          </div>
        </div>

        <div class="blog-post__tags">
          <span class="blog-post__tag">#AI×BPO</span>
          <span class="blog-post__tag">#業務自動化</span>
          <span class="blog-post__tag">#生成AI</span>
          <span class="blog-post__tag">#AI-OCR</span>
          <span class="blog-post__tag">#例外処理</span>
          <span class="blog-post__tag">#KPO</span>
          <span class="blog-post__tag">#BPO</span>
          <span class="blog-post__tag">#Human in the Loop</span>
          <span class="blog-post__tag">#AI品質評価</span>
          <span class="blog-post__tag">#業務設計</span>
          <span class="blog-post__tag">#DX</span>
          <span class="blog-post__tag">#ミャンマーBPO</span>
        </div>
      </header>

      <!-- Introduction -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">はじめに</h2>

        <p>生成AI、AI-OCR、AIエージェント。</p>
        <p>企業の業務自動化を支える技術は、ここ数年で大きく進化しました。</p>
        <p>実際、</p>
        <div class="blog-post__intro">
          <p>「この業務はAIで何%まで自動化できますか？」</p>
        </div>
        <p>というご相談をいただく機会も増えています。</p>
        <p>企業にとって、自動化率は分かりやすい指標です。</p>
        <p>50%より80%。<br />80%より95%。</p>
        <p>数字が高いほど、良い仕組みに見えます。</p>
        <p>しかし、実務の現場では、単純に自動化率だけを追いかけても、うまくいかないケースがあります。</p>
        <p>なぜなら、本当に重要なのは、</p>
        <div class="blog-post__intro">
          <p>AIが処理できた件数ではなく、AIが処理できなかった案件をどう扱うか</p>
        </div>
        <p>だからです。</p>
        <p>今回は、AIとBPOを組み合わせるうえで、なぜ「完全自動化」よりも「例外処理設計」が重要なのかを解説します。</p>
      </section>

      <!-- Table of Contents -->
      <nav class="blog-post__toc">
        <h3 class="blog-post__toc-title">目 次</h3>
        <ol class="blog-post__toc-list">
          <li><a href="#section-1">100%自動化は、本当に必要なのか</a></li>
          <li><a href="#section-2">自動化率95%でも、運用が大変になることがある</a></li>
          <li><a href="#section-3">本当に見るべきなのは「例外率」</a></li>
          <li><a href="#section-4">AI×BPOの基本的な役割分担</a></li>
          <li><a href="#section-5">例外処理設計とは何か</a></li>
          <li><a href="#section-6">例外処理を4段階に分ける</a></li>
          <li><a href="#section-7">「人が見る」のではなく「必要な人だけが見る」</a></li>
          <li><a href="#section-8">AIの信頼度をどう使うか</a></li>
          <li><a href="#section-9">例外を「減らす」のではなく「学習する」</a></li>
          <li><a href="#section-10">「100%自動化」より「人が減っていく仕組み」</a></li>
          <li><a href="#section-11">AI×BPOで見るべきKPI</a></li>
          <li><a href="#section-12">完全自動化を目指すほどコストが上がることもある</a></li>
          <li><a href="#section-13">AI×BPOは「人を残すため」の仕組みではない</a></li>
          <li><a href="#section-14">A CAN SOLUTIONSが考えるAI×BPO</a></li>
          <li><a href="#section-15">まとめ</a></li>
        </ol>
      </nav>

      <!-- Section 1 -->
      <section class="blog-post__content" id="section-1">
        <h2 class="blog-post__section-title">1. 100%自動化は、本当に必要なのか</h2>

        <p>AI導入の話になると、</p>
        <div class="blog-post__intro">
          <p>「できれば人を介さず、すべて自動化したい」</p>
        </div>
        <p>というご要望をいただくことがあります。</p>
        <p>もちろん、完全自動化できる業務もあります。</p>
        <p>しかし、多くの実務では、</p>
        <ul class="blog-post__list">
          <li>書類の形式が毎回違う</li>
          <li>例外条件がある</li>
          <li>顧客ごとにルールが違う</li>
          <li>判断に文脈が必要</li>
          <li>情報が不足している</li>
          <li>本人確認が必要</li>
        </ul>
        <p>といったケースが発生します。</p>
        <p>例えば、請求書処理を考えてみます。</p>
        <p>AI-OCRで、会社名。請求日。金額。税額。支払期限。を読み取ることはできます。</p>
        <p>しかし、</p>
        <div class="blog-post__intro">
          <p>「発注書と金額が違う」<br />「取引先名が登録名と異なる」<br />「税率が特殊」<br />「画像が不鮮明」</p>
        </div>
        <p>というケースでは、人の判断が必要になることがあります。</p>
        <p>つまり、業務には必ず、"AIが迷う領域"が存在します。</p>
      </section>

      <!-- Section 2 -->
      <section class="blog-post__content" id="section-2">
        <h2 class="blog-post__section-title">2. 自動化率95%でも、運用が大変になることがある</h2>

        <p>例えば、1日1,000件の処理がある業務で、自動化率95%だったとします。</p>
        <p>一見すると、非常に優秀です。</p>
        <p>AIが950件を処理し、人が50件だけ対応するように見えます。</p>
        <p>かなり効率化できているように見えます。</p>
        <p>しかし、その50件が、</p>
        <ul class="blog-post__list">
          <li>判断が難しい</li>
          <li>顧客確認が必要</li>
          <li>複数システムを確認する必要がある</li>
          <li>経験者でないと判断できない</li>
        </ul>
        <p>という案件ばかりだったらどうでしょうか。</p>
        <p>件数は5%でも、作業時間では50%以上を占めることがあります。</p>
        <p>つまり、</p>
        <div class="blog-post__intro">
          <p>「自動化率」と「業務削減率」は同じではありません。</p>
        </div>
        <p>ここを見誤ると、</p>
        <div class="blog-post__intro">
          <p>「AIを導入したのに、思ったほど人の負担が減らない」</p>
        </div>
        <p>という結果になります。</p>
      </section>

      <!-- Section 3 -->
      <section class="blog-post__content" id="section-3">
        <h2 class="blog-post__section-title">3. 本当に見るべきなのは「例外率」</h2>

        <p>AI活用では、自動化率と同じくらい重要な指標があります。</p>
        <p>それが、例外率です。</p>
        <p>例外率とは、</p>
        <div class="blog-post__intro">
          <p>AIだけでは判断できず、人の確認や判断が必要になった割合です。</p>
        </div>
        <p>例えば、</p>
        <ul class="blog-post__list">
          <li>全体：1,000件</li>
          <li>AI完結：900件</li>
          <li>人確認：100件</li>
        </ul>
        <p>なら、例外率は10%です。</p>
        <p>さらに、この100件を分類します。</p>
        <ul class="blog-post__list">
          <li>単純確認：60件</li>
          <li>軽微な修正：25件</li>
          <li>専門判断：10件</li>
          <li>顧客確認：5件</li>
        </ul>
        <p>ここまで見ると、「どこをAI化すべきか」「どこをBPOに任せるべきか」が見えてきます。</p>
      </section>

      <!-- Section 4 -->
      <section class="blog-post__content" id="section-4">
        <h2 class="blog-post__section-title">4. AI×BPOの基本的な役割分担</h2>

        <p>私たちは、AI活用を考えるとき、AIだけで完結させることを目的にはしていません。</p>
        <p>重要なのは、業務全体として最も効率的な役割分担をつくることです。</p>
        <p>例えば、</p>

        <h3 class="blog-post__subsection-title">AI</h3>
        <ul class="blog-post__list">
          <li>OCR</li>
          <li>データ抽出</li>
          <li>分類</li>
          <li>要約</li>
          <li>一次判定</li>
          <li>候補作成</li>
        </ul>

        <h3 class="blog-post__subsection-title">BPOチーム</h3>
        <ul class="blog-post__list">
          <li>AI出力の確認</li>
          <li>軽微な修正</li>
          <li>例外処理</li>
          <li>データ補完</li>
          <li>ダブルチェック</li>
          <li>品質記録</li>
        </ul>

        <h3 class="blog-post__subsection-title">日本側</h3>
        <ul class="blog-post__list">
          <li>高度な判断</li>
          <li>顧客確認</li>
          <li>品質基準設計</li>
          <li>業務改善</li>
          <li>ルール変更</li>
        </ul>

        <p>という形です。</p>
        <p>この役割分担ができると、社内スタッフは本当に必要な判断業務へ集中できます。</p>
      </section>

      <!-- Section 5 -->
      <section class="blog-post__content" id="section-5">
        <h2 class="blog-post__section-title">5. 例外処理設計とは何か</h2>

        <p>例外処理設計とは、</p>
        <div class="blog-post__intro">
          <p>AIが判断できなかったとき、次に何が起きるかを事前に決めておくこと</p>
        </div>
        <p>です。</p>
        <p>例えば、</p>
        <div class="blog-post__intro">
          <p>「AIが判断できなかったら人が確認する」</p>
        </div>
        <p>だけでは十分ではありません。</p>
        <ul class="blog-post__list">
          <li>誰が確認するのか</li>
          <li>どの条件なら修正してよいのか</li>
          <li>どの条件ならリーダーへ回すのか</li>
          <li>どの条件なら顧客へ確認するのか</li>
          <li>どこまで処理を止めるのか</li>
        </ul>
        <p>ここを決める必要があります。</p>
      </section>

      <!-- Section 6 -->
      <section class="blog-post__content" id="section-6">
        <h2 class="blog-post__section-title">6. 例外処理を4段階に分ける</h2>

        <p>実務では、例外を段階化すると運用しやすくなります。</p>

        <h3 class="blog-post__subsection-title">レベル1：単純確認</h3>
        <p>AIの結果を見て、明らかに正しいかどうか確認する。</p>
        <p>例：</p>
        <ul class="blog-post__list">
          <li>OCR結果と原本の照合</li>
          <li>日付の形式確認</li>
          <li>選択肢の確認</li>
        </ul>
        <p>これはBPOチームで対応しやすい領域です。</p>

        <h3 class="blog-post__subsection-title">レベル2：軽微な修正</h3>
        <p>ルールに基づいて修正できる案件。</p>
        <p>例：</p>
        <ul class="blog-post__list">
          <li>全角・半角修正</li>
          <li>誤読文字修正</li>
          <li>マスタとの照合</li>
          <li>定型的な表記修正</li>
        </ul>
        <p>これもBPOとの相性が良い領域です。</p>

        <h3 class="blog-post__subsection-title">レベル3：判断が必要な例外</h3>
        <p>複数条件を確認して判断する案件。</p>
        <p>例：</p>
        <ul class="blog-post__list">
          <li>金額差異</li>
          <li>契約条件の確認</li>
          <li>顧客別ルール</li>
          <li>過去事例との照合</li>
        </ul>
        <p>KPO的な対応が必要になります。</p>

        <h3 class="blog-post__subsection-title">レベル4：顧客・社内判断</h3>
        <p>BPO側では決められない案件。</p>
        <p>例：</p>
        <ul class="blog-post__list">
          <li>契約変更</li>
          <li>例外承認</li>
          <li>個人情報・法的判断</li>
          <li>顧客への確認</li>
        </ul>
        <p>ここは日本側やお客様へエスカレーションします。</p>
      </section>

      <!-- Section 7 -->
      <section class="blog-post__content" id="section-7">
        <h2 class="blog-post__section-title">7. 「人が見る」のではなく「必要な人だけが見る」</h2>

        <p>AI導入でよくあるのが、</p>
        <div class="blog-post__intro">
          <p>「念のため人が全部確認する」</p>
        </div>
        <p>という運用です。</p>
        <p>これは確かに安心です。</p>
        <p>しかし、全件を人が確認していたら、自動化の効果は限定的です。</p>
        <p>重要なのは、</p>
        <div class="blog-post__intro">
          <p>人が全部を見ることではなく、見るべき案件だけを見ること</p>
        </div>
        <p>です。</p>
        <p>例えば、</p>
        <p>AIの信頼度が高い案件は自動完結。一定以下ならBPOへ。さらに判断が難しい案件だけ日本側へ。</p>
        <p>という流れです。</p>
        <p>この設計ができると、AIの処理速度と人の判断力を両立できます。</p>
      </section>

      <!-- Section 8 -->
      <section class="blog-post__content" id="section-8">
        <h2 class="blog-post__section-title">8. AIの信頼度をどう使うか</h2>

        <p>AI-OCRや分類AIでは、信頼度スコアを持てる場合があります。</p>
        <p>例えば、</p>
        <ul class="blog-post__list">
          <li>98%以上 → 自動処理</li>
          <li>90〜98% → BPO確認</li>
          <li>90%未満 → リーダー確認</li>
        </ul>
        <p>といったルールを設定できます。</p>
        <p>ただし、信頼度だけで判断するのは危険です。</p>
        <p>金額や個人情報など、重要項目は高い信頼度でも確認が必要な場合があります。</p>
        <p>そのため、</p>
        <div class="blog-post__intro">
          <p>項目の重要度 × AI信頼度</p>
        </div>
        <p>で設計することが重要です。</p>
      </section>

      <!-- Section 9 -->
      <section class="blog-post__content" id="section-9">
        <h2 class="blog-post__section-title">9. 例外を「減らす」のではなく「学習する」</h2>

        <p>例外が発生すると、</p>
        <div class="blog-post__intro">
          <p>「AIの精度が悪い」</p>
        </div>
        <p>と思われがちです。</p>
        <p>しかし、例外は改善の材料でもあります。</p>
        <p>例えば、100件の例外があった場合、その理由を分類します。</p>
        <ul class="blog-post__list">
          <li>画像不鮮明</li>
          <li>マスタ不一致</li>
          <li>顧客別ルール</li>
          <li>AI誤認識</li>
          <li>入力不足</li>
        </ul>
        <p>すると、対策が見えてきます。</p>
        <p>画像不鮮明が多いなら、入力品質を改善する。マスタ不一致が多いなら、データ整備を行う。顧客別ルールが多いなら、プロンプトやルールへ追加する。AI誤認識が多いなら、学習データを見直す。</p>
        <p>こうして、</p>
        <div class="blog-post__intro">
          <p>例外 → 分析 → 改善 → 自動化率向上</p>
        </div>
        <p>という循環が生まれます。</p>
      </section>

      <!-- Section 10 -->
      <section class="blog-post__content" id="section-10">
        <h2 class="blog-post__section-title">10. 「100%自動化」より「人が減っていく仕組み」</h2>

        <p>理想的なAI×BPOの運用は、最初から人をゼロにすることではありません。</p>
        <p>例えば導入初期は、</p>
        <ul class="blog-post__list">
          <li>AI 60%</li>
          <li>BPO 30%</li>
          <li>日本側 10%</li>
        </ul>
        <p>だったものが、運用を続ける中で、</p>
        <ul class="blog-post__list">
          <li>AI 80%</li>
          <li>BPO 18%</li>
          <li>日本側 2%</li>
        </ul>
        <p>へ変わっていく。この方が現実的です。</p>
        <p>重要なのは、人の確認が必要な理由を蓄積し、徐々に減らしていくことです。</p>
      </section>

      <!-- Section 11 -->
      <section class="blog-post__content" id="section-11">
        <h2 class="blog-post__section-title">11. AI×BPOで見るべきKPI</h2>

        <p>自動化率だけでは、業務の状態は分かりません。</p>
        <p>私たちは、次のような指標を見ることが重要だと考えています。</p>
        <ul class="blog-post__list">
          <li>自動化率</li>
          <li>例外率</li>
          <li>修正率</li>
          <li>再作業率</li>
          <li>日本側へのエスカレーション率</li>
          <li>1件あたり処理時間</li>
          <li>AI誤判定率</li>
          <li>改善後の例外削減率</li>
        </ul>
        <p>こうした数字を継続的に確認することで、AIが本当に業務改善につながっているかを判断できます。</p>
      </section>

      <!-- Section 12 -->
      <section class="blog-post__content" id="section-12">
        <h2 class="blog-post__section-title">12. 完全自動化を目指すほどコストが上がることもある</h2>

        <p>実は、自動化率を80%から95%へ上げるより、95%から99%へ上げる方が難しいケースがあります。</p>
        <p>最後に残る数%は、最も例外性が高く、最も判断が難しい案件です。</p>
        <p>そこを無理にAI化しようとすると、システム開発や保守費用が大きく増えることがあります。</p>
        <p>そのため、どこまでAI化し、どこから人に任せるかを考えることが重要です。</p>
        <p>100%自動化より、95%+5%BPOの方が、コスト・品質・スピードのバランスが良い場合もあります。</p>
      </section>

      <!-- Section 13 -->
      <section class="blog-post__content" id="section-13">
        <h2 class="blog-post__section-title">13. AI×BPOは「人を残すため」の仕組みではない</h2>

        <p>AIとBPOを組み合わせると、</p>
        <div class="blog-post__intro">
          <p>「結局、人が必要なのでは？」</p>
        </div>
        <p>と思われるかもしれません。</p>
        <p>その通りです。</p>
        <p>ただし、人の役割が変わります。</p>
        <p>人が毎回すべての作業をするのではなく、</p>
        <p>AIが大量処理する。人は例外だけを見る。人が確認した結果をAI改善へ戻す。</p>
        <p>こうして、人の時間を、より価値の高い仕事へ移すことができます。</p>
      </section>

      <!-- Section 14 -->
      <section class="blog-post__content" id="section-14">
        <h2 class="blog-post__section-title">14. A CAN SOLUTIONSが考えるAI×BPO</h2>

        <p>私たちは、</p>
        <p>AI学習データ作成。AIアノテーション。AI品質評価。OCR結果の確認。BPO・KPO。</p>
        <p>といった業務に取り組んでいます。</p>
        <p>その中で重要だと感じているのは、</p>
        <div class="blog-post__intro">
          <p>「AIに何%任せられるか」</p>
        </div>
        <p>だけではありません。</p>
        <p>残った業務を、誰が、どのルールで、どの品質で処理するかです。</p>
        <p>AIだけ。BPOだけ。日本側だけ。ではなく、</p>
        <div class="blog-post__intro">
          <p>AI・ミャンマー・日本。</p>
        </div>
        <p>それぞれの得意な領域を組み合わせる。</p>
        <p>それが、現実的な業務自動化だと考えています。</p>
      </section>

      <!-- Section 15 -->
      <section class="blog-post__content" id="section-15">
        <h2 class="blog-post__section-title">15. まとめ</h2>

        <p>AI導入では、</p>
        <div class="blog-post__intro">
          <p>「自動化率を上げること」</p>
        </div>
        <p>が目的になりがちです。</p>
        <p>しかし、本当に重要なのは、</p>
        <div class="blog-post__intro">
          <p>業務全体を最適化することです。</p>
        </div>
        <p>AIが得意な仕事はAIへ。人が確認した方が良い仕事はBPOへ。高度な判断は日本側へ。</p>
        <p>そして、例外が発生したら、その理由を蓄積し、次の改善へつなげる。</p>
        <p>この仕組みをつくることで、AIは少しずつ業務に適応し、人の負担も少しずつ減っていきます。</p>
        <p>完全自動化を最初から目指す必要はありません。</p>
        <p>むしろ、</p>
        <div class="blog-post__intro">
          <p>「例外をどう処理するか」を設計できる会社の方が、AIを実務で使いこなせる。</p>
        </div>
        <p>私たちは、そう考えています。</p>

        <p class="blog-post__next-label">次回予告</p>
        <p class="blog-post__next-title">「BPOの品質管理は何を数値化すべきか？ — エラー率だけでは見えない5つのKPI」</p>
        <p class="blog-post__next-desc">品質管理というと、エラー率だけを見てしまいがちです。しかし、対応件数、再作業率、処理時間、改善件数などを見ることで、チームの成熟度や業務設計の問題も見えてきます。次回は、BPO・KPO運用で本当に見るべき品質指標について解説します。</p>
      </section>

      <section class="blog-post__content">
        <!-- CTA Section -->
        <?php include '3buttonsection.php'; ?>
      </section>

    </div>
  </article>

  <script src="assets/js/main.js" defer></script>
  <?php include 'footer.php'; ?>
</body>
</html>

<?php
/**
 * Admin panel translations — Japanese (default) and English.
 *
 * Language choice: ?lang=ja|en on any admin page saves it in a cookie and
 * redirects back to the same page without the parameter; after that the
 * cookie decides. Loaded by db.php (every admin page) and by login.php.
 *
 * Helpers:
 *   t('key', ['n' => 3])  plain text (for PHP messages; escape it when printing)
 *   te('key', [...])      HTML-escaped text, for templates
 *   tj('key', [...])      JSON string literal, for inline <script>
 *   th('key', ['n' => '<b>0</b>'])  escaped text with raw-HTML placeholders
 *
 * To add a string: add 'key' => ['日本語', 'English'] to admin_strings().
 * An English value may be ['singular', 'plural'], chosen by the 'n' variable.
 * Outgoing newsletter emails are NOT translated — subscribers get Japanese.
 */

const ADMIN_LANGS       = ['ja' => '日本語', 'en' => 'English'];
const ADMIN_LANG_COOKIE = 'acan_admin_lang';

function admin_lang(?string $set = null): string
{
    static $lang = 'ja';
    if ($set !== null && isset(ADMIN_LANGS[$set])) {
        $lang = $set;
    }
    return $lang;
}

// ?lang=xx → remember it, then reload the page without the parameter.
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'GET' && isset($_GET['lang']) && is_string($_GET['lang']) && isset(ADMIN_LANGS[$_GET['lang']])) {
    $cookiePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/') . '/';
    setcookie(ADMIN_LANG_COOKIE, $_GET['lang'], [
        'expires'  => time() + 60 * 60 * 24 * 365,
        'path'     => $cookiePath,
        'samesite' => 'Lax',
        'httponly' => true,
    ]);
    $query = $_GET;
    unset($query['lang']);
    header('Location: ' . basename($_SERVER['SCRIPT_NAME']) . ($query ? '?' . http_build_query($query) : ''));
    exit;
}

admin_lang($_COOKIE[ADMIN_LANG_COOKIE] ?? 'ja');
$adminLang = admin_lang();

/** URL of the current page in another language (drops one-off ?msg= notices). */
function admin_lang_url(string $lang): string
{
    $query = $_GET;
    unset($query['msg']);
    $query['lang'] = $lang;
    return basename($_SERVER['SCRIPT_NAME']) . '?' . http_build_query($query);
}

function t(string $key, array $vars = []): string
{
    $strings = admin_strings();
    if (!isset($strings[$key])) {
        return $key;
    }
    $text = $strings[$key][admin_lang() === 'en' ? 1 : 0];
    if (is_array($text)) {
        $text = (isset($vars['n']) && (int)$vars['n'] === 1) ? $text[0] : $text[1];
    }
    foreach ($vars as $name => $value) {
        $text = str_replace('{' . $name . '}', (string)$value, $text);
    }
    return $text;
}

function te(string $key, array $vars = []): string
{
    return htmlspecialchars(t($key, $vars), ENT_QUOTES, 'UTF-8');
}

function tj(string $key, array $vars = []): string
{
    return json_encode(t($key, $vars), JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}

function th(string $key, array $html = []): string
{
    $text = te($key);
    foreach ($html as $name => $value) {
        $text = str_replace('{' . $name . '}', $value, $text);
    }
    return $text;
}

function admin_strings(): array
{
    static $s = [
        // ── App / layout ─────────────────────────────────────────────
        'app.name'            => ['A CAN SOLUTIONS 管理画面', 'A CAN SOLUTIONS Admin'],
        'app.short'           => ['A CAN 管理画面', 'A CAN Admin'],
        'app.admin'           => ['管理画面', 'Admin panel'],
        'nav.toggle'          => ['メニューの開閉', 'Toggle menu'],
        'nav.home'            => ['ホーム', 'Home'],
        'nav.view_site'       => ['サイトを表示', 'View site'],
        'nav.fullscreen'      => ['全画面表示', 'Full screen'],
        'nav.account'         => ['アカウント', 'Account'],
        'nav.logged_in_as'    => ['{user} としてログイン中', 'Signed in as {user}'],
        'nav.language'        => ['言語', 'Language'],
        'nav.h.subscribers'   => ['登録者管理', 'Subscribers'],
        'nav.h.newsletter'    => ['ニュースレター', 'Newsletter'],
        'nav.h.reports'       => ['レポート', 'Reports'],
        'nav.h.account'       => ['アカウント', 'Account'],
        'nav.dashboard'       => ['ダッシュボード', 'Dashboard'],
        'nav.contacts'        => ['お問い合わせ一覧', 'Contact Inquiries'],
        'nav.subscribers'     => ['メルマガ登録一覧', 'Subscribers'],
        'nav.send'            => ['ニュースレター送信', 'Send Newsletter'],
        'nav.history'         => ['送信履歴', 'Send History'],
        'nav.analytics'       => ['アクセス解析', 'Analytics'],
        'nav.password'        => ['パスワード変更', 'Change Password'],
        'nav.logout'          => ['ログアウト', 'Log out'],

        // ── Common ───────────────────────────────────────────────────
        'common.close'        => ['閉じる', 'Close'],
        'common.deleted'      => ['削除しました。', 'Deleted.'],
        'common.search'       => ['検索', 'Search'],
        'common.clear'        => ['クリア', 'Clear'],
        'common.search_ph'    => ['メール・名前・会社名・電話番号で検索', 'Search email, name, company, phone'],
        'common.csv_export'   => ['CSVエクスポート', 'Export CSV'],
        'common.view_list'    => ['一覧を見る', 'View list'],
        'common.items'        => ['{n}件', ['{n} item', '{n} items']],
        'common.unit'         => ['件', ''],
        'common.select_all'   => ['すべて選択', 'Select all'],
        'common.delete'       => ['削除', 'Delete'],
        'common.delete_q'     => ['削除しますか？', 'Delete this record?'],
        'common.bulk_delete'  => ['選択項目を削除', 'Delete selected'],
        'common.prev_month'   => ['前月：{n}件', 'Last month: {n}'],
        'common.colon'        => ['：', ': '],
        'common.dot'          => ['・', ' · '],
        'common.paren'        => ['（{x}）', ' ({x})'],
        'col.email'           => ['メールアドレス', 'Email'],
        'col.name'            => ['名前', 'Name'],
        'col.company'         => ['会社名', 'Company'],
        'col.phone'           => ['電話番号', 'Phone'],
        'col.message'         => ['メッセージ', 'Message'],
        'col.source'          => ['ソース', 'Source'],
        'col.created'         => ['登録日時', 'Registered'],
        'col.actions'         => ['操作', 'Actions'],
        'source.contact'      => ['お問い合わせ', 'Contact'],
        'source.newsletter'   => ['メルマガ', 'Newsletter'],

        // ── Login ────────────────────────────────────────────────────
        'login.title'         => ['ログイン', 'Log in'],
        'login.prompt'        => ['サインインしてください', 'Please sign in'],
        'login.username'      => ['ユーザー名', 'Username'],
        'login.password'      => ['パスワード', 'Password'],
        'login.submit'        => ['ログイン', 'Log in'],
        'login.error'         => ['ユーザー名またはパスワードが正しくありません。', 'Incorrect username or password.'],

        // ── Dashboard ────────────────────────────────────────────────
        'dash.title'          => ['ダッシュボード', 'Dashboard'],
        'dash.subtitle'       => ['お問い合わせ・メルマガ登録を含む、すべての登録者を表示しています。', 'All registrations, including contact inquiries and newsletter sign-ups.'],
        'dash.total'          => ['総登録者数', 'Total registrations'],
        'dash.contacts'       => ['お問い合わせ', 'Contact inquiries'],
        'dash.newsletter'     => ['メルマガ登録', 'Newsletter sign-ups'],
        'dash.this_month'     => ['今月の登録数（前月比）', 'This month'],
        'dash.latest'         => ['最新登録日', 'Latest registration'],
        'dash.list'           => ['登録者一覧（全て）', 'All registrations'],
        'dash.empty'          => ['登録者が見つかりません。', 'No registrations found.'],
        'dash.bulk_q'         => ['選択した登録者を削除しますか？', 'Delete the selected registrations?'],

        // ── Contacts ─────────────────────────────────────────────────
        'contacts.title'      => ['お問い合わせ一覧', 'Contact Inquiries'],
        'contacts.subtitle'   => ['お問い合わせフォームから送信された内容を表示しています。', 'Messages submitted through the contact form.'],
        'contacts.total'      => ['総お問い合わせ数', 'Total inquiries'],
        'contacts.this_month' => ['今月のお問い合わせ（前月比）', 'This month'],
        'contacts.latest'     => ['最新のお問い合わせ日', 'Latest inquiry'],
        'contacts.empty'      => ['お問い合わせが見つかりません。', 'No inquiries found.'],
        'contacts.bulk_q'     => ['選択したお問い合わせを削除しますか？', 'Delete the selected inquiries?'],

        // ── Newsletter subscribers ───────────────────────────────────
        'subs.title'          => ['メルマガ登録一覧', 'Newsletter Subscribers'],
        'subs.subtitle'       => ['ニュースレターに登録された方の一覧です。', 'People who signed up for the newsletter.'],
        'subs.total'          => ['総メルマガ登録者数', 'Total subscribers'],
        'subs.send'           => ['ニュースレターを送信', 'Send a newsletter'],
        'subs.empty'          => ['メルマガ登録者が見つかりません。', 'No subscribers found.'],
        'subs.bulk_q'         => ['選択したメルマガ登録者を削除しますか？', 'Delete the selected subscribers?'],

        // ── Send newsletter ──────────────────────────────────────────
        'send.title'          => ['ニュースレター送信', 'Send Newsletter'],
        'send.subtitle'       => ['メルマガ登録者へ、自由な内容のお知らせメールを作成して送信します。', 'Write an announcement and email it to newsletter subscribers.'],
        'send.err_mailer'     => ['メール送信機能が利用できません（vendor/未インストール）。サーバー管理者にお問い合わせください。', 'Email sending is unavailable (vendor/ is not installed). Please contact the server administrator.'],
        'send.err_empty'      => ['件名と本文を入力してください。', 'Please enter a subject and a message.'],
        'send.err_no_to'      => ['送信先を1件以上選択してください。', 'Please select at least one recipient.'],
        'send.done'           => ['送信完了', 'Sending finished'],
        'send.result'         => ['{sent}件成功', '{sent} sent'],
        'send.result_failed'  => ['{sent}件成功、{failed}件失敗', '{sent} sent, {failed} failed'],
        'send.subscribers'    => ['メルマガ登録者', 'Subscribers'],
        'send.history'        => ['送信履歴', 'Send history'],
        'send.content'        => ['メール内容', 'Message'],
        'send.subject'        => ['件名', 'Subject'],
        'send.body'           => ['本文', 'Body'],
        'send.hint'           => ['太字・リンク・画像などはツールバーで装飾できます。画像ボタンからアップロードすると、そのままメールに挿入されます。', 'Use the toolbar for bold text, links and images. Images uploaded with the image button are inserted straight into the email.'],
        'send.recipients'     => ['送信先（メルマガ登録者）', 'Recipients (subscribers)'],
        'send.toggle_all'     => ['全選択/解除', 'Select / clear all'],
        'send.will_send'      => ['{n}件に送信します', 'Sending to {n} recipient(s)'],
        'send.submit'         => ['送信する', 'Send'],
        'send.confirm'        => ['選択した送信先へメールを送信しますか？', 'Send the email to the selected recipients?'],
        'send.placeholder'    => ['メール本文を入力してください…', 'Write your message…'],
        'send.uploading'      => ['アップロード中…', 'Uploading…'],
        'send.upload_failed'  => ['画像のアップロードに失敗しました。', 'Image upload failed.'],
        'send.upload_failed_reason' => ['画像のアップロードに失敗しました: ', 'Image upload failed: '],
        'upload.none'         => ['画像が送信されていません。', 'No image was sent.'],
        'upload.failed'       => ['アップロードに失敗しました。', 'Upload failed.'],
        'upload.too_large'    => ['画像サイズは5MB以下にしてください。', 'Images must be 5 MB or smaller.'],
        'upload.bad_type'     => ['対応していない画像形式です（JPEG, PNG, WebP, GIFのみ）。', 'Unsupported image format (JPEG, PNG, WebP and GIF only).'],
        'upload.save_failed'  => ['画像の保存に失敗しました。', 'The image could not be saved.'],

        // ── Newsletter history ───────────────────────────────────────
        'hist.title'          => ['ニュースレター送信履歴', 'Newsletter History'],
        'hist.subtitle'       => ['これまでに送信したニュースレターの件名・結果・本文を確認できます。', 'Subjects, results and content of every newsletter sent so far.'],
        'hist.list'           => ['送信履歴', 'Send history'],
        'hist.new'            => ['新規作成', 'New newsletter'],
        'hist.col_sent_at'    => ['送信日時', 'Sent at'],
        'hist.col_sender'     => ['送信者', 'Sent by'],
        'hist.col_result'     => ['結果', 'Result'],
        'hist.col_content'    => ['本文', 'Content'],
        'hist.empty'          => ['まだ送信履歴がありません。', 'No newsletters have been sent yet.'],
        'hist.sent'           => ['送信 {n}', 'Sent {n}'],
        'hist.failed'         => ['失敗 {n}', 'Failed {n}'],
        'hist.targets'        => ['対象 {n}件', ['{n} recipient', '{n} recipients']],
        'hist.preview'        => ['プレビュー', 'Preview'],
        'hist.preview_title'  => ['送信済みメールのプレビュー', 'Preview of the sent email'],
        'hist.preview_frame'  => ['メールプレビュー', 'Email preview'],

        // ── Click / download report ──────────────────────────────────
        'an.title'            => ['アクセス解析', 'Analytics'],
        'an.tab_clicks'       => ['電話・メール・資料クリック', 'Phone, email & file clicks'],
        'an.tab_download'     => ['資料ダウンロード', 'Downloads page'],
        'an.tab_myanmar'      => ['ミャンマー情報', 'Myanmar reports'],
        'an.subtitle'         => ['サイト全体の電話・メールクリックと資料ダウンロードを集計しています（GA4とは別に自社DBで記録）。', 'Phone and email clicks and document downloads across the whole site (recorded in our own database, separately from GA4).'],
        'an.period'           => ['集計期間', 'Period'],
        'an.period_7'         => ['7日間', '7 days'],
        'an.period_30'        => ['30日間', '30 days'],
        'an.period_90'        => ['90日間', '90 days'],
        'an.period_all'       => ['全期間', 'All time'],
        'an.cumulative'       => ['累計 {n} 件', '{n} all time'],
        'an.breakdown'        => ['リンク別の内訳（上位100件）', 'Breakdown by link (top 100)'],
        'an.total'            => ['合計 {n}件', 'Total {n}'],
        'an.col_event'        => ['イベント', 'Event'],
        'an.col_link'         => ['リンク / 資料名', 'Link / document'],
        'an.col_count'        => ['回数', 'Count'],
        'an.col_last'         => ['最終発生日時', 'Last occurred'],
        'an.empty'            => ['この期間のデータはまだありません。', 'No data for this period yet.'],
        'event.contact_submission'       => ['お問い合わせ送信', 'Contact form submissions'],
        'event.click_phone_number'       => ['電話番号クリック', 'Phone number clicks'],
        'event.click_email_info'         => ['メールクリック', 'Email clicks'],
        'event.download_bpo_guide'       => ['BPO/KPO資料ダウンロード', 'BPO/KPO guide downloads'],
        'event.download_myanmar_report'  => ['ミャンマーレポートDL', 'Myanmar report downloads'],
        'event.download_company_profile' => ['会社案内ダウンロード', 'Company profile downloads'],
        'event.file_download'            => ['資料ダウンロード（一覧）', 'Document downloads (list)'],

        // ── Blog analytics ───────────────────────────────────────────
        'ba.title'            => ['ブログ分析', 'Blog Analytics'],
        'ba.subtitle'         => ['ブログ記事の閲覧数・訪問者・国・デバイス・流入元・読了状況を集計しています（自社DBで記録）。', 'Views, visitors, countries, devices, traffic sources and reading depth for blog posts (recorded in our own database).'],
        'ba.privacy_note'     => ['訪問者は匿名IDで識別し、氏名・IPアドレスは保存しません。', 'Visitors are identified by an anonymous ID; no names or IP addresses are stored.'],
        'ba.own_hidden'       => ['管理画面にログイン中のブラウザ（あなた自身）からの閲覧・クリック {n}件 は集計から除外しています。', 'Your own visits and clicks from a browser signed in to this admin panel ({n}) are left out of these numbers.'],
        'ba.own_show'         => ['自分のクリックも表示', 'Show my own clicks too'],
        'ba.own_shown'        => ['この数字には、管理画面にログイン中のブラウザ（あなた自身）の閲覧・クリック {n}件 が含まれています（「管理者」バッジ）。', 'These numbers include {n} visits and clicks from your own browser signed in to this admin panel (marked "Admin").'],
        'ba.own_hide'         => ['自分のクリックを除外', 'Leave my own clicks out'],
        'ba.admin_badge'      => ['管理者', 'Admin'],
        'ba.csv_admin'        => ['管理者による操作', 'By admin'],
        'ba.range_today'      => ['今日', 'Today'],
        'ba.range_7'          => ['7日間', '7 days'],
        'ba.range_30'         => ['30日間', '30 days'],
        'ba.range_90'         => ['90日間', '90 days'],
        'ba.range_year'       => ['今年', 'This year'],
        'ba.range_all'        => ['全期間', 'All time'],
        'ba.range'            => ['期間', 'Period'],
        'ba.custom'           => ['期間指定', 'Custom'],
        'ba.from'             => ['開始日', 'From'],
        'ba.to'               => ['終了日', 'To'],
        'ba.apply'            => ['表示', 'Apply'],
        'ba.group'            => ['集計単位', 'Group by'],
        'ba.group_day'        => ['日別', 'Day'],
        'ba.group_month'      => ['月別', 'Month'],
        'ba.group_year'       => ['年別', 'Year'],
        'ba.post'             => ['記事', 'Post'],
        'ba.all_posts'        => ['すべての記事', 'All posts'],
        'ba.visitor_filter'   => ['訪問者 {id} の履歴を表示中', 'Showing visitor {id}'],
        'ba.clear_filter'     => ['解除', 'Clear'],
        'ba.views'            => ['閲覧数', 'Views'],
        'ba.visitors'         => ['訪問者数', 'Visitors'],
        'ba.new_visitors'     => ['うち新規 {n}', '{n} new'],
        'ba.list_clicks'      => ['一覧からのクリック', 'Clicks from blog list'],
        'ba.avg_time'         => ['平均閲覧時間', 'Avg. reading time'],
        'ba.read_rate'        => ['読了率', 'Read-through rate'],
        'ba.read_rate_hint'   => ['記事の最後までスクロールされた割合', 'Share of views scrolled to the end'],
        'ba.vs_prev'          => ['前期間比', 'vs. previous period'],
        'ba.pt'               => ['{n}pt', '{n} pts'],
        'ba.dur_ms'           => ['{m}分{s}秒', '{m}m {s}s'],
        'ba.dur_s'            => ['{s}秒', '{s}s'],
        'ba.trend'            => ['閲覧数の推移', 'Views over time'],
        'ba.show_table'       => ['表で表示', 'Show as table'],
        'ba.col_period'       => ['期間', 'Period'],
        'ba.posts'            => ['記事別ランキング', 'Top posts'],
        'ba.col_post'         => ['記事', 'Post'],
        'ba.col_clicks'       => ['一覧クリック', 'List clicks'],
        'ba.col_avg_time'     => ['平均閲覧時間', 'Avg. time'],
        'ba.col_scroll'       => ['平均スクロール', 'Avg. scroll'],
        'ba.col_last'         => ['最終閲覧', 'Last viewed'],
        'ba.filter_post'      => ['この記事で絞り込む', 'Filter by this post'],
        'ba.open_post'        => ['記事を開く', 'Open post'],
        'ba.countries'        => ['国・地域別', 'Countries'],
        'ba.country_note'     => ['国はブラウザのタイムゾーンから推定しています。', 'Country is estimated from the browser\'s time zone.'],
        'ba.unknown'          => ['不明', 'Unknown'],
        'ba.other'            => ['その他', 'Other'],
        'ba.devices'          => ['デバイス別', 'Devices'],
        'ba.dev_mobile'       => ['スマートフォン', 'Mobile'],
        'ba.dev_desktop'      => ['パソコン', 'Desktop'],
        'ba.dev_tablet'       => ['タブレット', 'Tablet'],
        'ba.sources'          => ['流入元', 'Traffic sources'],
        'ba.src_direct'       => ['直接・ブックマーク', 'Direct / bookmark'],
        'ba.src_internal'     => ['サイト内', 'Within this site'],
        'ba.src_search'       => ['検索エンジン', 'Search engines'],
        'ba.src_social'       => ['SNS', 'Social media'],
        'ba.src_ai'           => ['AIアシスタント', 'AI assistants'],
        'ba.src_referral'     => ['他のサイト', 'Other websites'],
        'ba.ref_sites'        => ['参照元サイト', 'Referring sites'],
        'ba.recent'           => ['最近のアクティビティ（最新50件）', 'Recent activity (latest 50)'],
        'ba.col_time'         => ['日時', 'Time'],
        'ba.col_event'        => ['イベント', 'Event'],
        'ba.col_country'      => ['国', 'Country'],
        'ba.col_device'       => ['デバイス', 'Device'],
        'ba.col_source'       => ['流入元', 'Source'],
        'ba.col_visitor'      => ['訪問者', 'Visitor'],
        'ba.col_time_on_page' => ['閲覧時間', 'Time on page'],
        'ba.ev_view'          => ['閲覧', 'View'],
        'ba.ev_list_click'    => ['一覧クリック', 'List click'],
        'ba.ev_download'      => ['ダウンロード', 'Download'],
        'ba.basis_views'      => ['閲覧数ベース', 'by views'],
        'ba.new'              => ['新規', 'New'],
        'ba.visitor_history'  => ['この訪問者の履歴を見る', 'Show this visitor\'s history'],
        'ba.empty'            => ['この期間のデータはまだありません。', 'No data for this period yet.'],
        'ba.csv_type'         => ['イベント種別', 'Event type'],
        'ba.csv_slug'         => ['ページ', 'Page'],
        'ba.csv_title'        => ['ページタイトル', 'Page title'],
        'ba.csv_target'       => ['ファイル', 'File'],
        'ba.csv_target_title' => ['資料名', 'Document'],
        'ba.csv_source_page'  => ['クリック元ページ', 'Clicked on page'],
        'ba.csv_visitor'      => ['訪問者ID', 'Visitor ID'],
        'ba.csv_new'          => ['新規訪問者', 'New visitor'],
        'ba.csv_tz'           => ['タイムゾーン', 'Time zone'],
        'ba.csv_lang'         => ['ブラウザ言語', 'Browser language'],
        'ba.csv_ref_host'     => ['参照元', 'Referrer'],
        'ba.csv_seconds'      => ['閲覧秒数', 'Seconds on page'],
        'ba.csv_scroll'       => ['スクロール率(%)', 'Scroll depth (%)'],

        // ── Download pages (/download, /myanmar-situation) ──────────
        'dl.subtitle'         => ['資料ダウンロードページ（/download）の閲覧数と、どの資料が・いつ・どの国から・どの端末でダウンロードされたかを集計しています。', 'Views of the resource library (/download) and which documents were downloaded — when, from which country and on which device.'],
        'my.subtitle'         => ['ミャンマー情報ページ（/myanmar-situation）の閲覧数と、どのレポートが・いつ・どの国から・どの端末でダウンロードされたかを集計しています。', 'Views of the Myanmar reports page (/myanmar-situation) and which reports were downloaded — when, from which country and on which device.'],
        'dl.page_views'       => ['ページ閲覧数', 'Page views'],
        'dl.downloads'        => ['ダウンロード数', 'Downloads'],
        'dl.people'           => ['ダウンロードした人 {n}人', ['by {n} person', 'by {n} people']],
        'dl.rate'             => ['ダウンロード率', 'Download rate'],
        'dl.rate_hint'        => ['ページ訪問者のうち、資料を1件以上ダウンロードした人の割合', 'Share of page visitors who downloaded at least one document'],
        'dl.avg_time'         => ['平均滞在時間', 'Avg. time on page'],
        'dl.trend'            => ['ページ閲覧数とダウンロード数の推移', 'Page views and downloads over time'],
        'dl.files'            => ['資料別ダウンロード数', 'Downloads by document'],
        'dl.col_file'         => ['資料', 'Document'],
        'dl.col_people'       => ['ダウンロードした人', 'People'],
        'dl.col_last'         => ['最終ダウンロード', 'Last downloaded'],
        'dl.filter_file'      => ['この資料で絞り込む', 'Filter by this document'],
        'dl.open_file'        => ['資料を開く', 'Open document'],
        'dl.all_files'        => ['すべての資料', 'All documents'],
        'dl.basis'            => ['ダウンロード数ベース', 'by downloads'],
        'dl.file_filter_note' => ['資料で絞り込み中：ダウンロード関連の数字はこの資料のみ、ページ閲覧数はページ全体の数字です。', 'Filtered by document: download figures are for this document only; page views are for the whole page.'],

        // ── Change password ──────────────────────────────────────────
        'pw.title'            => ['パスワード変更', 'Change Password'],
        'pw.subtitle'         => ['ログイン中の管理者アカウントのパスワードを変更します。', 'Change the password of the admin account you are signed in with.'],
        'pw.current'          => ['現在のパスワード', 'Current password'],
        'pw.new'              => ['新しいパスワード', 'New password'],
        'pw.new_hint'         => ['8文字以上で入力してください。', 'At least 8 characters.'],
        'pw.confirm'          => ['新しいパスワード（確認）', 'Confirm new password'],
        'pw.submit'           => ['パスワードを変更する', 'Change password'],
        'pw.err_required'     => ['すべての項目を入力してください。', 'Please fill in all fields.'],
        'pw.err_length'       => ['新しいパスワードは8文字以上で入力してください。', 'The new password must be at least 8 characters.'],
        'pw.err_mismatch'     => ['新しいパスワードと確認用パスワードが一致しません。', 'The new password and its confirmation do not match.'],
        'pw.err_current'      => ['現在のパスワードが正しくありません。', 'The current password is incorrect.'],
        'pw.success'          => ['パスワードを変更しました。', 'Your password has been changed.'],
    ];
    return $s;
}

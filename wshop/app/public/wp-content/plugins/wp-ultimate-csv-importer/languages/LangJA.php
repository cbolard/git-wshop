<?php
/**
 * WP Ultimate CSV Importer plugin file.
 *
 * Copyright (C) 2010-2020, Smackcoders Inc - info@smackcoders.com
 */

namespace Smackcoders\FCSV;

if ( ! defined( 'ABSPATH' ) )
exit; // Exit if accessed directly

class LangJA {
        private static $japanese_instance = null , $media_instance;

        public static function getInstance() {
                if (LangJA::$japanese_instance == null) {
                        LangJA::$japanese_instance = new LangJA;
                        return LangJA::$japanese_instance;
                }
                return LangJA::$japanese_instance;
        }

        public static function contents(){
                $response = array('ImportUpdate' => 'インポート/更新',
                        'Dashboard' => 'ダッシュボード',
                        'Manager' => 'マネージャー',
                        'Export' => '書き出す',
                        'Settings' => '設定',
                        'Support' => 'サポート',
                        'UploadfromDesktop' => 'デスクトップからアップロード',
                        'UploadfromFTPSFTP' => 'FTP / SFTPからアップロード',
                        'UploadfromURL' => 'URLからアップロード',
                        'ChoosFileintheServer' => 'サーバーでファイルを選択',
                        'Drag&Dropyourfilesor' => 'ファイルをドラッグアンドドロップするか、',
                        'Browse' => 'ブラウズ',
                        'NewItem' => '新商品',
                        'Import' => 'インポート',
                        'Update' => '更新',
                        'Import-Update' => 'インポート-更新',
                        'ExistingItems' => '既存のアイテム',
                        'ImportEachRecordAs'=> '各レコードを',
                        'Continue' => '継続する',
                        'Search' => '探す',
                        'FromDate' => '日付から',
                        'ToDate' => '現在まで',
                        'SEARCH' => '探す',
                        'SavedTemplate' => '保存されたテンプレート',
                        'TEMPLATES' => 'テンプレート',
                        'MATCHEDCOLUMNSCOUNT' => '一致した列の数',
                        'MODULE' => 'モジュール',
                        'CREATEDTIME' => '作成時間',
                        'ACTION' => 'アクション',
                        'USETEMPLATE' => 'テンプレートを使用',
                        'CREATENEWMAPPING' => '新しいマッピングを作成',
                        'BACK' => 'バック',
                        'SIMPLEMODE' => 'シンプルモード',
                        'ADVANCEDMODE' => 'アドバンストモード',
                        'DRAGDROPMODE' => 'ドラッグアンドドロップモード',
                        'WordpressFields' => 'Wordpressフィールド',
                        'WPFIELDS' => 'WPフィールド',
                        'CSVHEADER' => 'CSVヘッダー',
                        'Action' => 'アクション',
                        'Name' => '名前',
                        'HINT' => 'ヒント',
                        'Example' => '例',
                        'WordPressCoreFields' => 'WordPressコアフィールド',
                        'ACFFreeFields' => 'ACFフリーフィールド',
                        'ACFFields' => 'ACFフィールド',
                        'ACFImageMetaFields' => 'ACF画像メタフィールド',
                        'ACFGroupFields' => 'ACFグループフィールド',
                        'ACFProFields' => 'ACFプロフィールド',
                        'ACFRepeaterFields' => 'ACFリピーターフィールド',
                        'ACFFlexibleFields' => 'ACFフレキシブルフィールド',
                        'TypesCustomFields' => 'Types Custom Fields',
                        'TypesImageMetaFields' => 'タイプ画像メタフィールド',
                        'PodsFields' => 'ポッドフィールド',
                        'JobListingFields' => 'ジョブリストフィールド',
                        'PodsImageMetaFields' => 'ポッド画像メタフィールド',
                        'CustomFieldSuite' => 'カスタムフィールドスイート',
                        'AllInOneSeoFields' => 'オールインワンソフィールド',
                        'YoastSeoFields' => 'ヨーストソフィールズ',
                        'BillingAndShippingInformation' => '請求および配送情報',
                        'CustomFieldsWPMemberFields' => 'カスタムフィールドWPメンバーフィールド',
                        'CustomFieldsMemberFields' => 'カスタムフィールドメンバーフィールド',
                        'ProductMetaFields' => '製品メタフィールド',
                        'ProductAttrFields' => '製品属性フィールド',
                        'ProductImageMetaFields' => '製品ギャラリーメタフィールド',
                        'OrderMetaFields' => 'メタフィールドの注文',
                        'CouponMetaFields' => 'クーポンメタフィールド',
                        'RefundMetaFields' => 'メタフィールドの払い戻し',
                        'WPECommerceCustomFields' => 'WPEコマースカスタムフィールド',
                        'EventsManagerFields' => 'イベントマネージャーフィールド',
                        'NextGENGalleryFields' => 'NextGENギャラリーフィールド',
                        'WPMLFields' => 'WPMLフィールド',
                        'CMB2CustomFields' => 'CMB2カスタムフィールド',
                        'JetEngineFields' => 'ジェットエンジンフィールド',
                        'CourseSettingsFields' => 'コース設定フィールド',
                        'CurriculumSettingsFields' => 'カリキュラム設定フィールド',
                        'QuizSettingsFields' => 'クイズ設定フィールド',
                        'LessonSettingsFields' => 'レッスン設定フィールド',
                        'QuestionSettingsFields' => '質問設定フィールド',
                        'OrderSettingsFields' => '注文設定フィールド',
                        'replyattributesfields' => '返信属性フィールド',
                        'forumattributesfields' => 'フォーラム属性フィールド',
                        'topicattributesfields' => 'トピック属性フィールド',
                        'polylangfields'=>'ポリラン設定フィールド',
                        'WordPressCustomFields' => 'WordPressカスタムフィールド',
                        'DirectoryProFields' => 'Directory Proフィールド',
                        'TermsandTaxonomies' => '用語と分類法',
                        'IsSerialized' => 'シリアル化されている',
                        'NoCustomFieldsFound' => 'カスタムフィールドが見つかりません', 
                        'MediaUploadFields' => 'メディアアップロードフィールド',
                        'UploadMedia' => 'メディアのアップロード',
                        'UploadedListofFiles' => 'アップロードされたファイルのリスト',
                        'UploadedMediaFileLists' => 'アップロードされたメディアファイルリスト',
                        'SavethismappingasTemplate' => 'このマッピングをテンプレートとして保存します',
                        'Save' => '保存する',
                        'Doyouneedtoupdatethecurrentmapping' => '現在のマッピングを更新する必要がありますか？',
                        'Savethecurrentmappingasnewtemplate' => '現在のマッピングを新しいテンプレートとして保存します',
                        'Back' => 'バック',
                        'Size' => 'サイズ',
                        'MediaHandling' => '注目の画像メディア処理', 
                        'Downloadexternalimagestoyourmedia' => 'メディアに外部画像をダウンロードする',
                        'ImageHandling' => '画像処理',
                        'Usemediaimagesifalreadyavailable' => 'すでに利用可能な場合はメディア画像を使用する',
                        'Doyouwanttooverwritetheexistingimages' => '既存の画像を上書きしますか',
                        'ImageSizes' => '画像サイズ',
                        'Thumbnail' => 'サムネイル',
                        'Medium' => '中',
                        'MediumLarge' => 'ミディアムラージ',
                        'Large' => '大',
                        'Custom' => 'カスタム',
                        'Slug' => 'ナメクジ',
                        'Width' => '幅',
                        'Height' => '高さ',
                        'Addcustomsizes' => 'カスタムサイズを追加する',
                        'PostContentImageOption' => 'コンテンツ画像投稿オプション',
                        'DownloadPostContentExternalImagestoMedia' => '投稿コンテンツの外部画像をメディアにダウンロードする',
                        'MediaSEOAdvancedOptions' => 'メディアSEOと詳細オプション',
                        'SetimageTitle' => '画像のタイトルを設定',
                        'SetimageCaption' => '画像のキャプションを設定',
                        'SetimageAltText' => '画像の代替テキストを設定',
                        'SetimageDescription' => 'セット画像説明',
                        'Changeimagefilenameto' => '画像ファイル名をに変更します',
                        'ImportconfigurationSection' => '構成セクションのインポート',
                        'EnablesafeprestateRollback' => '安全なプレステートロールバックを有効にする',
                        'Backupbeforeimport' => 'インポート前のバックアップ',
                        'DoyouwanttoSWITCHONMaintenancemodewhileimport' => 'インポート中にメンテナンスモードに切り替えますか',
                        'Doyouwanttohandletheduplicateonexistingrecords' => '既存のレコードの重複を処理しますか',
                        'Mentionthefieldswhichyouwanttohandleduplicates' => '重複を処理するフィールドに言及します',
                        'DoyouwanttoUpdateanexistingrecords' => '既存のレコードを更新しますか',
                        'Updaterecordsbasedon' => 'に基づいてレコードを更新する',
                        'DoyouwanttoSchedulethisImport' => 'このインポートをスケジュールしますか',
                        'ScheduleDate' => '予定日',
                        'ScheduleFrequency' => 'スケジュールの頻度',
                        'TimeZone' => 'タイムゾーン',
                        'ScheduleTime' => '予定時刻',
                        'Schedule' => 'スケジュール',
                        'Scheduled' => '予定',
                        'Import' => 'インポート',
                        'Format' => 'フォーマット',
                        'OneTime' => '一度',
                        'Daily' => '毎日',
                        'Weekly' => '毎週',
                        'Monthly' => '毎月',
                        'Hourly' => '毎時',
                        'Every4hours' => '4時間ごと',
                        'Every2hours' => '2時間ごと',
                        'Every30mins'=> '30分ごと',
                        'Every15mins' => '15分ごと',
                        'Every10mins' => '10分ごと',
                        'Every5mins' => '5分ごと',
                        'FileName' => 'ファイル名',
                        'FileSize' => 'ファイルサイズ',
                        'Process' => '処理する',
                        'Totalnoofrecords' => 'レコードの総数',
                        'CurrentProcessingRecord' => '現在の処理記録',
                        'RemainingRecord' => '残りの記録',
                        'Completed' => '完了しました',
                        'TimeElapsed' => '時間が経過した',
                        'approximate' => '近似',
                        'DownloadLog' => 'ビュー・ログ',
                        'NoRecord' => '記録なし',
                        'UploadedCSVFileLists' => 'アップロードされたCSVファイルリスト',
                        'Hostname' => 'ホスト名',
                        'HostPort' => 'ホストポート',
                        'HostUsername' => 'ホストユーザー名',
                        'HostPassword' => 'ホストパスワード',
                        'HostPath' => 'ホストパス',
                        'DefaultPort' => 'デフォルトのポート',
                        'FTPUsername' => 'FTPユーザー名',
                        'FTPPassword' => 'FTPパスワード',
                        'ConnectionType' => '接続タイプ',
                        'ImportersActivity' => '輸入業者の活動',
                        'ImportStatistics' => '統計のインポート',
                        'FileManager' => 'ファイル管理',
                        'SmartSchedule' => 'スマートスケジュール',
                        'ScheduledExport' => '予定されたエクスポート',
                        'Templates' => 'テンプレート',
                        'LogManager' => 'ログマネージャー',
                        'NotSelectedAnyTab' => 'どのタブも選択されていません',
                        'EventInfo' => 'イベント情報',
                        'EventDate' => '開催日',
                        'EventStatus' => 'イベント状況',
                        'Actions' => '行動',
                        'Date' => '日付',
                        'Purpose' => '目的',
                        'Revision' => 'リビジョン',
                        'Select' => '選択する',
                        'Inserted' => '挿入',
                        'Updated' => '更新しました',
                        'Skipped' => 'スキップ',
                        'Delete' => '消去',
                        'Noeventsfound' => 'イベントが見つかりません',
                        'ScheduleInfo' => 'スケジュール情報',
                        'ScheduledDate' => '予定日',
                        'ScheduledTime' => '予定時刻',
                        'Youhavenotscheduledanyevent' => 'イベントをスケジュールしていません',
                        'Frequency' => '周波数',
                        'Time' => '時間',
                        'EditSchedule' => 'スケジュールの編集',
                        'SaveChanges' => '変更内容を保存',
                        'TemplateInfo' => 'テンプレート情報',
                        'TemplateName' => 'テンプレート名',
                        'Module' => 'モジュール',
                        'CreatedTime' => '作成時間',
                        'NoTemplateFound' => 'テンプレートが見つかりません',
                        'Download' => 'ダウンロード',
                        'NoLogRecordFound' => 'ログレコードが見つかりません',
                        'GeneralSettings' => '一般設定',
                        'DatabaseOptimization' => 'データベースの最適化',
                        'Media' =>'メディア',
                        'AccessKey' => 'アクセスキー',
                        'SecurityandPerformance' => 'セキュリティとパフォーマンス',
                        'Documentation' => 'ドキュメンテーション',
                        'MediaReport' => 'メディア報道',
                        'DropTable' => 'ドロップテーブル',
                        'Ifenabledplugindeactivationwillremoveplugindatathiscannotberestored' => 'プラグインの非アクティブ化を有効にするとプラグインデータが削除される場合、これを復元することはできません。',
                        'Scheduledlogmails' => 'スケジュールされたログメール',
                        'Enabletogetscheduledlogmails' => 'スケジュールされたログメールを取得できるようにする.',
                        'Sendpasswordtouser' => 'ユーザーにパスワードを送信する',
                        'Enabletosendpasswordinformationthroughemail' => '電子メールでパスワード情報を送信できるようにします。',
                        'WoocommerceCustomattribute' => 'Woocommerceカスタム属性',
                        'Enablestoregisterwoocommercecustomattribute' => 'woocommerceカスタム属性を登録できるようにします。',
                        'PleasemakesurethatyoutakenecessarybackupbeforeproceedingwithdatabaseoptimizationThedatalostcantbereverted' => 'データベースの最適化に進む前に、必要なバックアップを必ずとってください。失われたデータを元に戻すことはできません。',
                        'DeleteallorphanedPostPageMeta' => '孤立した投稿/ページメタをすべて削除する',
                        'Deleteallunassignedtags' => '割り当てられていないタグをすべて削除します',
                        'DeleteallPostPagerevisions' => '投稿/ページのリビジョンをすべて削除する',
                        'DeleteallautodraftedPostPage' => '自動作成された投稿/ページをすべて削除',
                        'DeleteallPostPageintrash' => 'ゴミ箱のすべての投稿/ページを削除',
                        'DeleteallCommentsintrash' => 'ゴミ箱にあるすべてのコメントを削除する',
                        'DeleteallUnapprovedComments' => '未承認のコメントをすべて削除',
                        'DeleteallPingbackComments' => 'すべてのPingbackコメントを削除する',
                        'DeleteallTrackbackComments' => 'すべてのトラックバックコメントを削除',
                        'DeleteallSpamComments' => 'すべてのスパムコメントを削除する',
                        'RunDBOptimizer' => 'DBオプティマイザを実行する',
                        'DatabaseOptimizationLog' => 'データベース最適化ログ',
                        'noofOrphanedPostPagemetahasbeenremoved' => '孤立した投稿/ページのメタは削除されていません。',
                        'noofUnassignedtagshasbeenremoved' => '割り当てられていないタグは削除されていません。',
                        'noofPostPagerevisionhasbeenremoved' => 'Post / Pageリビジョンは削除されていません。',
                        'noofAutodraftedPostPagehasbeenremoved' => 'no of Auto drafted Post/Page has been removed.',
                        'noofPostPageintrashhasbeenremoved' => '自動ドラフト投稿/ページは削除されていません。',
                        'noofSpamcommentshasbeenremoved' => 'スパムコメントは削除されていません。',
                        'noofCommentsintrashhasbeenremoved' => 'ゴミ箱のコメントは削除されませんでした。',
                        'noofUnapprovedcommentshasbeenremoved' => '未承認のコメントは削除されていません。',
                        'noofPingbackcommentshasbeenremoved' => 'ピングバックコメントは削除されていません。',
                        'noofTrackbackcommentshasbeenremoved' => 'トラックバックコメントは削除されていません。',
                        'Allowauthorseditorstoimport' => '著者/編集者にインポートを許可する',
                        'Allowauthorseditorstoimport' => '著者/編集者にインポートを許可する',
                        'Thisenablesauthorseditorstoimport' => 'これにより、作成者/編集者はインポートできます。',
                        'MinimumrequiredphpinivaluesIniconfiguredvalues' => '最低限必要なphp.ini値（Ini構成値）',
                        'Variables' => '変数',
                        'SystemValues' => 'システム値',
                        'MinimumRequirements' => '最小要件',
                        'RequiredtoenabledisableLoadersExtentionsandmodules' => 'ローダー、エクステンション、モジュールを有効/無効にするために必要',
                        'DebugInformation' => 'デバッグ情報：',
                        'SmackcodersGuidelines' => 'スマックコーダーのガイドライン',
                        'DevelopmentNews' => '開発ニュース',
                        'WhatsNew' => '新着情報？',
                        'YoutubeChannel' => 'YouTubeチャンネル',
                        'OtherWordPressPlugins' => 'その他のWordPressプラグイン',
                        'Count' => 'カウント',
                        'ImageType' => '画像タイプ',
                        'Status' => '状態',
                        'Loading' => '読み込み中',
                        'LoveWPUltimateCSVImporterGivea5starreviewon' => 'WP Ultimate CSV Importerが大好きで、5つ星のレビューを投稿してください',
                        'ContactSupport' => 'サポート問い合わせ先',
                        'Email' => 'Eメール',
                        'Supporttype' => 'サポートタイプ',
                        'BugReporting' => 'バグ報告',
                        'FeatureEnhancement' => '機能強化',
                        'Message' => 'メッセージ',
                        'Send' => '送る',
                        'NewsletterSubscription' => 'ニュースレターの購読',
                        'Subscribe' => '申し込む',
                        'Note' => '注意',
                        'SubscribetoSmackcodersMailinglistafewmessagesayear' => 'Smackcodersメーリングリストに登録する（年に数通のメッセージ）',
                        'Pleasedraftamailto' => 'メールを下書きしてください',
                        'Ifyoudoesnotgetanyacknowledgementwithinanhour' => '1時間以内に確認が得られない場合！',
                        'Selectyourmoduletoexportthedata' => 'データをエクスポートするモジュールを選択してください',
                        'Toexportdatabasedonthefilters' => 'フィルタに基づいてデータをエクスポートするには',
                        'ExportFileName' => 'ファイル名をエクスポート',
                        'AdvancedSettings' => '高度な設定',
                        'ExportType' => 'エクスポートタイプ',
                        'SplittheRecord' => 'レコードを分割する',
                        'AdvancedFilters'=> '高度なフィルター',
                        'Exportdatawithautodelimiters' => '自動区切り文字でデータをエクスポートする',
                        'Delimiters' => '区切り文字',
                        'OtherDelimiters' => 'その他の区切り文字',
                        'Exportdataforthespecificperiod' => '特定の期間のデータをエクスポートする',
                        'StartFrom' => 'から始まる',
                        'EndTo' => '終了する',
                        'Exportdatawiththespecificstatus' => '特定のステータスのデータをエクスポートする',
                        'All' => 'すべて',
                        'Publish' => '公開する',
                        'Sticky' => '粘着性',
                        'Private' => '民間',
                        'Protected' => '保護されています',
                        'Draft' => 'ドラフト',
                        'Pending' => '保留中',
                        'Exportdatabyspecificauthors' => '特定の作成者によるデータのエクスポート',
                        'Authors' => '著者',
                        'Exportdatabyspecificcategory' => '特定のカテゴリごとにデータをエクスポートする',
                        'Category' => 'カテゴリー',
                        'ExportdatabasedonspecificInclusions' => '特定の包含に基づいてデータをエクスポートする',
                        'DoyouwanttoSchedulethisExport' => 'このエクスポートをスケジュールしますか',
                        'SelectTimeZone' => 'TimeZoneを選択します',
                        'ScheduleExport' => 'エクスポートのスケジュール',
                        'DataExported' => 'エクスポートされたデータ',
                        'FilePath' => 'ファイルパス',
                );
        return $response;
        }
}


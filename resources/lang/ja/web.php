<?php

return [

	'common' => [
		'comment' => 'コメント',
		'commented' => 'コメントされました',
		'comments' => 'コメント',
		'like' => 'いいね',
		'liked' => 'いいねしました',
		'likes' => 'いいね',
		'share' => '共有',
		'shared' => '共有されました',
		'shares' => '共有',
		'unshare' => '共有解除',
		'bookmark' => 'ブックマーク',

		'cancel' => 'キャンセル',
		'copyLink' => 'リンクをコピー',
		'delete' => '削除',
		'error' => 'エラー',
		'errorMsg' => '何かが間違っています。しばらくしてからやり直してください。',
		'oops' => 'おおっと！',
		'other' => 'その他',
		'readMore' => 'もっと読む',
		'success' => '成功しました',
		'proceed' => '続行',
		'next' => '次へ',
		'close' => '閉じる',
		'clickHere' => 'ここをクリック',

		'sensitive' => 'センシティブ',
		'sensitiveContent' => 'センシティブなコンテンツ',
		'sensitiveContentWarning' => 'この投稿にはセンシティブなコンテンツが含まれている可能性があります',
	],

	'site' => [
		'terms' => '利用規約',
		'privacy' => 'プライバシーポリシー',
	],

	'navmenu' => [
		'search' => '検索',
		'admin' => '管理者ダッシュボード',

		// Timelines
		'homeFeed' => 'ホームフィード',
		'localFeed' => 'ローカルフィード',
		'globalFeed' => 'グローバルフィード',

		// Core features
		'discover' => '発見',
		'directMessages' => 'ダイレクトメッセージ',
		'notifications' => '通知',
		'groups' => 'グループ',
		'stories' => 'ストーリーズ',

		// Self links
		'profile' => 'プロフィール',
		'drive' => 'ドライブ',
		'settings' => '設定',
		'compose' => '新規投稿',
		'logout' => 'ログアウト',

		// Nav footer
		'about' => 'このサーバーについて',
		'help' => 'ヘルプ',
		'language' => '言語',
		'privacy' => 'プライバシー',
		'terms' => '利用規約',

		// Temporary links
		'backToPreviousDesign' => '以前のデザインに戻す'
	],

	'directMessages' => [
		'inbox' => '受信トレイ',
		'sent' => '送信済み',
		'requests' => 'リクエスト'
	],

	'notifications' => [
		'liked' => 'さんが次をいいねしました:',
		'commented' => 'さんが次にコメントしました:',
		'reacted' => 'さんが次に反応しました:',
		'shared' => 'さんが次を共有しました:',
		'tagged' => 'さんが次にあなたをタグ付けしました:',

		'updatedA' => 'さんが次を更新しました:',
		'sentA' => 'さんが次を送信しました:',

		'followed' => 'さんがフォローしました:',
		'mentioned' => 'さんが返信しました:',
		'you' => 'あなた',

		'yourApplication' => '参加するアプリケーション',
		'applicationApproved' => 'が承認されました!',
		'applicationRejected' => 'は拒否されました。6ヶ月後に再度参加を申請できます。',

		'dm' => 'dm',
		'groupPost' => 'グループの投稿',
		'modlog' => 'モデレーションログ',
		'post' => '投稿',
		'story' => 'ストーリー',
		'noneFound' => '通知はありません',
	],

	'post' => [
		'shareToFollowers' => 'フォロワーに共有',
		'shareToOther' => 'その他に共有',
		'noLikes' => 'まだ誰からもいいねされていません',
		'uploading' => 'アップロード中',
	],

	'profile' => [
		'posts' => '投稿',
		'followers' => 'フォロワー',
		'following' => 'フォロー中',
		'admin' => '管理者',
		'collections' => 'コレクション',
		'follow' => 'フォロー',
		'unfollow' => 'フォロー解除',
		'editProfile' => 'プロフィールを編集',
		'followRequested' => 'フォロー承認待ち',
		'joined' => '参加しました',

		'emptyCollections' => 'コレクションが見つかりませんでした',
		'emptyPosts' => '投稿が見つかりませんでした',
	],

	'menu' => [
		'viewPost' => '投稿を見る',
		'viewProfile' => 'プロフィールを見る',
		'moderationTools' => 'モデレーションツール',
		'report' => '報告',
		'archive' => 'アーカイブ',
		'unarchive' => 'アーカイブを解除',
		'embed' => '埋め込み',

		'selectOneOption' => '以下の選択肢から1つ選択してください',
		'unlistFromTimelines' => 'タイムラインに非表示',
		'addCW' => 'コンテンツ警告を追加',
		'removeCW' => 'コンテンツ警告を削除',
		'markAsSpammer' => 'スパムとしてマーク',
		'markAsSpammerText' => '非表示＋コンテンツ警告を既存の、また将来の投稿に追加',
		'spam' => 'スパム',
		'sensitive' => 'センシティブなコンテンツ',
		'abusive' => '虐待または有害',
		'underageAccount' => '未成年のアカウント',
		'copyrightInfringement' => '著作権侵害',
		'impersonation' => 'なりすまし',
		'scamOrFraud' => '詐欺または不正な行為',
		'confirmReport' => '報告を送信',
		'confirmReportText' => '本当にこの投稿を報告しますか？',
		'reportSent' => '報告が送信されました！',
		'reportSentText' => 'あなたの報告を受け取りました。',
		'reportSentError' => 'この投稿を報告する際に問題が発生しました。',

		'modAddCWConfirm' => 'この投稿にコンテンツ警告を追加してもよろしいですか？',
		'modCWSuccess' => 'コンテンツ警告が追加されました',
		'modRemoveCWConfirm' => '本当にこの投稿からコンテンツ警告を削除しますか？',
		'modRemoveCWSuccess' => 'コンテンツ警告が削除されました',
		'modUnlistConfirm' => '本当にこの投稿を非表示にしますか？',
		'modUnlistSuccess' => '投稿が非表示になりました',
		'modMarkAsSpammerConfirm' => 'このユーザーをスパムとして登録していいですか？既存のまた、今後の投稿はすべてタイムラインに表示されず、コンテンツ警告が適用されます。',
		'modMarkAsSpammerSuccess' => 'アカウントをスパムとしてマークしました',

		'toFollowers' => 'フォロワー向け',

		'showCaption' => '説明を表示',
		'showLikes' => 'いいねを表示',
		'compactMode' => 'コンパクトモード',
		'embedConfirmText' => 'この埋め込みを利用する事で、あなたは次に同意したとみなされます:',

		'deletePostConfirm' => '本当にこの投稿を削除しますか？',
		'archivePostConfirm' => '本当にこの投稿をアーカイブしますか？',
		'unarchivePostConfirm' => '本当にこの投稿をアーカイブから削除しますか？',
	],

	'story' => [
		'add' => 'ストーリーを追加'
	],

	'timeline' => [
		'peopleYouMayKnow' => '知り合いかも',

		'onboarding' => [
			'welcome' => 'ようこそ',
			'thisIsYourHomeFeed' => 'これはあなたのフォームフィードです、フォローしているアカウントからの投稿が時系列で表示されます。',
			'letUsHelpYouFind' => '興味のある人をフォローするお手伝いをします',
			'refreshFeed' => 'フィードをリフレッシュ',
		],
	],

	'hashtags' => [
		'emptyFeed' => 'このハッシュタグの投稿が見つかりませんでした'
	],

	'report' => [
		'report' => '報告',
		'selectReason' => '理由を選択してください',
		'reported' => '報告済み',
		'sendingReport' => '報告を送信中',
		'thanksMsg' => '報告ありがとうございます、あなたのような人々が私達のコミュニティーを安全に保ちます！',
		'contactAdminMsg' => 'この投稿または報告について管理者に問い合わせたい場合',
	],

];

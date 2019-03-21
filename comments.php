<div class="comment-area">
    <h3>この記事へのコメント</h3>
    <?php if(have_comments()):?>
        <ol>
            <?php wp_list_comments(); ?>
        </ol>
    <?php else:?>
        <p>まだコメントはありません</p>
    <?php endif;?>
    <?php if(preg_match("/127.0.[0-9]+.[0-9]+/",$_SERVER["REMOTE_ADDR"])):?>
        <?php
        $comment_args = array(
            'fields' => array(
                'author'	=> '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                'email'		=> '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                'url' 		=> '', //ウェブサイトの入力欄を削除
            ),
            //コメントフォームのタイトル
            'title_reply'			=> 'コメントを書く',
            //コメントフォームの前に表示するテキスト
            'comment_notes_before'	=> '<p class="comment-notes">メールアドレスは公開されませんのでご安心ください。</p><p class="comment-notes">名前とメールアドレスは必ずご記入をお願いします。</p>',
            //コメントフォームの後に表示するテキスト
            'comment_notes_after'	=> '<p class="submit-note">内容に問題なければ、下記の「コメントを送信する」ボタンを押してください。</p>',
            //送信ボタンのテキスト
            'label_submit'			=> 'コメントを送信する'
        );
        ?>

        <?php comment_form($comment_args); ?>
    <?php else:?>
        <p>コメントをするには学内から接続してください。</p>
    <?php endif;?>
</div>
